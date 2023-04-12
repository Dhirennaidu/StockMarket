<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Order Taking</title>
       <style>
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");


*,
*::before,
*::after {
  margin: 0;
  padding: 0;
}
body {
  padding: 50px;
  min-height: 100vh;
}
h1 {
  text-decoration: underline;
  margin-bottom: 50px;
}
section {
  margin: 20px 0;
}
.timeline {
  margin-top: 35px;
  padding: 15px;
  display: grid;
  grid-template-columns: 40% auto;
  justify-content: center;
}

ul {
  margin-top: 30px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  list-style: none;
  padding: 0;
}
li {
  margin-top: 30px;
  position: relative;
  padding: 25px;
}
li p {
  padding: 0 20px;
  transition: 1.5s;
}

.date {
  position: absolute;

  top: 30px;
  left: -50px;
  opacity: 0;
  transition: 1.5s;
  font-size: 12px;
}
.timeline-line {
  background: rgb(228, 228, 228);
  width: 4px;
  border-radius: 12px;
  position: relative;
  justify-self: end;
}

.timeline-point {
  border: none;
  position: absolute;

  border-radius: 50%;
  background: rgb(228, 228, 228);
  width: 8px;
  height: 8px;

  top: 30px;
  left: -6px;
  transition: 1.5s ease;
}
.timeline-innerline {
  position: absolute;
  background: blue;
  width: 4px;
  height: 0%;

  top: 0%;
  left: 0%;

  transition: 1s linear;
}

@media screen and (min-width: 728px) {
  .timeline {
    display: block;
  }
  ul {
    flex-direction: row;
  }
  li {
    margin-top: 0px;
    position: relative;
    width: 100%;
    padding: 0px;
  }
  li p {
    transform: translateY(-10px);
    opacity: 0;
    /* padding: 0 20px; */
    transition: 1.5s;
  }

  .date {
    opacity: 0;
    transition: 1.5s;
    font-size: 12px;

    position: absolute;
    top: -60px;
    left: 38%;
  }

  .timeline-point {
    width: 35px;
    height: 35px;
    
    top: -48px;
    left: 40%;
    transition: 1.5s ease;
  }

  .timeline-line {
    width: 100%;
    height: 4px;
  }

  .timeline-innerline {
    position: absolute;
    background: green;
    width: 0%;
    height: 20px;

    top: 0%;
    left: 0%;

    transition: 1s linear;
    border-radius: 999px;
  }
}

    </style>
<title>Order Tracking</title>

</head>
<body>

   

    <section class="timeline">
      <div class="timeline-line">
        <span class="timeline-innerline"></span>
      </div>

      <ul>
        <li>
          <span class="timeline-point"></span>
          <span class="date" ><i class="fa fa-check-square" style="font-size:18px;color:green"></i></span>
          <p>Order Sucssesfully</p>
        </li>
        <li>
          <span class="timeline-point"></span>
          <span class="date" ><i class="fa fa-check-square" style="font-size:18px;color:green"></i></span>
          <p>Packing your Product</p>
        </li>
        <li>
          <span class="timeline-point"></span>
          <span class="date" ><i class="fa fa-check-square" style="font-size:18px;color:green"></i></span>
          <p>Order Placeed Sucssesfully</p>
        </li>
      
      </ul>
    </section>
   
</body>
<script>
const line = document.querySelector(".timeline-innerline");

let i = 0;
let i2 = 1;
let target1 = document.querySelector(".timeline ul");
let target2 = document.querySelectorAll(".timeline ul li");

const timeline_events = document.querySelectorAll("ul li");

function showTime(e) {
  e.setAttribute("done", "true");
  e.querySelector(".timeline-point").style.background = "blue";
  e.querySelector(".date").style.opacity = "100%";
  e.querySelector("p").style.opacity = "100%";
  e.querySelector("p").style.transform = "translateY(0px)";
}

function hideTime(e) {
  e.removeAttribute("done");
  e.querySelector(".timeline-point").style.background = "rgb(228, 228, 228)";
  e.querySelector(".date").style.opacity = "0%";
  e.querySelector("p").style.opacity = "0%";
  e.querySelector("p").style.transform = "translateY(-10px)";
}

function slowLoop() {
  setTimeout(function () {
    showTime(timeline_events[i]);
    timelineProgress(i+0);
    i++;
    if (i < timeline_events.length) {
      slowLoop();
    }
  }, 2000);
}


function timelineProgress(value) {
  let progress = `${(value / timeline_events.length) * 100}%`;
  if (window.matchMedia("(min-width: 728px)").matches) {
    line.style.width = progress;
    line.style.height = "10px";
  } else {
    line.style.height = progress;
    line.style.width = "10px";
  }
}

let observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.intersectionRatio > 0.9) {
        if (window.matchMedia("(min-width: 728px)").matches) {
          slowLoop();
        } else {
          showTime(entry.target);
          timelineProgress(i2);
          i2++;
        }
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 1, rootMargin: "0px 0px -50px 0px" }
);

if (window.matchMedia("(min-width: 728px)").matches) {
  observer.observe(target1);
} else {
  target2.forEach((t) => {
    observer.observe(t);
  });
}


timeline_events.forEach((li, index) => {
  li.addEventListener("click", () => {
    if (li.getAttribute("done")) {
      timelineProgress(index);

      // hide all timeline events from last upto the point clicked
      timeline_events.forEach((ev, idx) => {
        if (idx >= index) {
          hideTime(ev);
        }
      });
    } else {
      timelineProgress(index + 1);
      // show all timeline events from first upto the point clicked
      timeline_events.forEach((ev, idx) => {
        if (idx <= index) {
          showTime(ev);
        }
      });
    }
  });
});

var doit;
window.addEventListener("resize", () => {
  clearTimeout(doit);
  doit = setTimeout(resizeEnd, 1200);
});

function resizeEnd() {
  i = 0;
  slowLoop();
}


    </script>
</html>