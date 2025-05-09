const t1 = gsap.timeline({defaults: {ease: 'power2.out'}});
t1.to(".slider",{y:"-100%", duration: 0.5});
t1.to("nav",{y:"0%", duration: 0.5}, "-=1");
t1.fromTo("body", {opacity: 0}, {opacity:1, duration: 0.5});

