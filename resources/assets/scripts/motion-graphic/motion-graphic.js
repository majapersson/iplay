
// Settings
var particleCount = 40,
flareCount = 0,
motion = 0.05,
tilt = 0.05,
particleSizeBase = 1,
particleSizeMultiplier = 0.5,
flareSizeBase = 100,
flareSizeMultiplier = 100,
lineWidth = 1,
linkChance = 75, // chance per frame of link, higher = smaller chance
linkLengthMin = 5, // min linked vertices
linkLengthMax = 7, // max linked vertices
linkOpacity = 0.25; // number between 0 & 1
linkFade = 90, // link fade-out frames
linkSpeed = 0, // distance a link travels in 1 frame
glareAngle = -60,
glareOpacityMultiplier = 0.4,
renderParticles = true,
renderParticleGlare = true,
renderFlares = false,
renderLinks = false,
renderMesh = false,
flicker = false,
flickerSmoothing = 15, // higher = smoother flicker
blurSize = 0,
orbitTilt = true,
randomMotion = true,
noiseLength = 1000,
noiseStrength = 3;

document.querySelectorAll('.stars').forEach(canvas => {
  var context = canvas.getContext('2d'),
  color = canvas.dataset['color'],
  mouse = { x: 0, y: 0 },
  m = {},
  r = 0,
  c = 1000, // multiplier for delaunay points, since floats too small can mess up the algorithm
  n = 0,
  nAngle = (Math.PI * 2) / noiseLength,
  nRad = 100,
  nScale = 0.5,
  nPos = {x: 0, y: 0},
  points = [],
  vertices = [],
  triangles = [],
  links = [],
  particles = [],
  flares = [];

  function init() {
    var i, j, k;

    // requestAnimFrame polyfill
    window.requestAnimFrame = (function(){
      return  window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      function( callback ){
        window.setTimeout(callback, 1000 / 60);
      };
    })();


    // Size canvas
    resize();

    mouse.x = canvas.clientWidth / 2;
    mouse.y = canvas.clientHeight / 2;

    // Create particle positions
    for (i = 0; i < particleCount; i++) {
      var p = new Particle();
      particles.push(p);
      points.push([p.x*c, p.y*c]);
    }


    vertices = Delaunay.triangulate(points);


    var tri = [];
    for (i = 0; i < vertices.length; i++) {
      if (tri.length == 3) {
        triangles.push(tri);
        tri = [];
      }
      tri.push(vertices[i]);
    }


    // Tell all the particles who their neighbors are
    for (i = 0; i < particles.length; i++) {
      // Loop through all tirangles
      for (j = 0; j < triangles.length; j++) {
        // Check if this particle's index is in this triangle
        k = triangles[j].indexOf(i);
        // If it is, add its neighbors to the particles contacts list
        if (k !== -1) {
          triangles[j].forEach(function(value, index, array) {
            if (value !== i && particles[i].neighbors.indexOf(value) == -1) {
              particles[i].neighbors.push(value);
            }
          });
        }
      }
    }

    var fps = 15;
    var now;
    var then = Date.now();
    var interval = 1000/fps;
    var delta;
    // Animation loop
    (function animloop(){
      requestAnimFrame(animloop);
      now = Date.now();
      delta = now - then;
      if (delta > interval) {


        then = now - (delta % interval);

        resize();
        render();
      }

    })();
  }

  function render() {
    if (randomMotion) {
      n++;
      if (n >= noiseLength) {
        n = 0;
      }

      nPos = noisePoint(n);

    }



    if (renderParticles) {
      // Render particles
      for (var i = 0; i < particleCount; i++) {
        particles[i].render();
      }
    }


  }

  function resize() {

    canvas.width = window.innerWidth * (window.devicePixelRatio || 1);
    canvas.height = canvas.width * (canvas.clientHeight / canvas.clientWidth);

  }



  // Particle class
  var Particle = function() {
    this.x = random(-0.1, 1.1, true);
    this.y = random(-0.1, 1.1, true);
    this.z = random(0,4);
    this.color = color;
    this.opacity = random(0.1,1,true);
    this.flicker = 0;
    this.neighbors = []; // placeholder for neighbors
  };
  Particle.prototype.render = function() {
    var pos = position(this.x, this.y, this.z),
    r = ((this.z * particleSizeMultiplier) + particleSizeBase) * (sizeRatio() / 1000),
    o = this.opacity;



    context.fillStyle = this.color;
    context.globalAlpha = o;
    context.beginPath();

    context.fill();
    context.closePath();

    if (renderParticleGlare) {
      context.globalAlpha = o * glareOpacityMultiplier;

      context.ellipse(pos.x, pos.y, r * 100, r, (glareAngle - ((nPos.x - 0.5) * noiseStrength * motion)) * (Math.PI / 180), 0, 2 * Math.PI, false);
      context.fill();
      context.closePath();
    }

    context.globalAlpha = 1;
  };

  // Flare class


  // Link class
  var Link = function(startVertex, numPoints) {
    this.length = numPoints;
    this.verts = [startVertex];
    this.stage = 0;
    this.linked = [startVertex];
    this.distances = [];
    this.traveled = 0;
    this.fade = 0;
    this.finished = false;
  };




  // Utils

  function noisePoint(i) {
    var a = nAngle * i,
    cosA = Math.cos(a),
    sinA = Math.sin(a),


    rad = nRad;
    return {
      x: rad * cosA,
      y: rad * sinA
    };
  }

  function position(x, y, z) {
    return {
      x: (x * canvas.width) + ((((canvas.width / 2) - mouse.x + ((nPos.x - 0.5) * noiseStrength)) * z) * motion),
      y: (y * canvas.height) + ((((canvas.height / 2) - mouse.y + ((nPos.y - 0.5) * noiseStrength)) * z) * motion)
    };
  }

  function sizeRatio() {
    return canvas.width >= canvas.height ? canvas.width : canvas.height;
  }

  function random(min, max, float) {
    return float ?
    Math.random() * (max - min) + min :
    Math.floor(Math.random() * (max - min + 1)) + min;
  }


  // init
  if (canvas) init();
});
