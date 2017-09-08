
new Vue ({
  el: '#suitcasa',

  methods: {
    display_createNew: function () {
      document.getElementById("landing-screen").style.display="none";
      document.getElementById("section-wrapper").style.display="block";
      document.getElementById("section-wrapper").className="animationIn";
      document.getElementById("landing-screen").className="animationOut";
    },
    display_cityHoliday: function () {
      document.getElementById("landing-screen").style.display="none";
      document.getElementById("cityHoliday").style.display="block";
      document.getElementById("cityHoliday").className="animationIn";
      document.getElementById("landing-screen").className="animationOut";
    },
    display_charter: function () {
      document.getElementById("landing-screen").style.display="none";
      document.getElementById("charter-body").style.display="block";
      document.getElementById("charter-body").className="animationIn";
      document.getElementById("landing-screen").className="animationOut";
    },
    display_skiing: function () {
      document.getElementById("landing-screen").style.display="none";
      document.getElementById("ski-pakkeliste-wrapper").style.display="block";
      document.getElementById("ski-pakkeliste-wrapper").className="animationIn";
      document.getElementById("landing-screen").className="animationOut";
    }
  }
});
