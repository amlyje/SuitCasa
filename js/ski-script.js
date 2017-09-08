// JavaScript Document

new Vue({
  el: "#ski-pakkeliste-wrapper",
  data: {
    newTask_basics: "",
    newTask_documents: "",
    newTask_toiletries: "",
    newTask_clothes: "",
    taskList_basics: [
      {
        checked: false,
        text: 'Ski boots',
      },
      {
        checked: false,
        text: 'Ski / Snowboard',
      },
      {
        checked: false,
        text: 'Ski helmet',
      },
      {
        checked: false,
        text: 'More random stuff',
      }
    ],
    taskList_documents: [
      {
        checked: false,
        text: 'Passport',
      },
      {
        checked: false,
        text: 'Drivers License, or other ID',
      },
      {
        checked: false,
        text: 'More random stuff',
      }
    ],
    taskList_toiletries: [
      {
        checked: false,
        text: 'Toothbrush',
      },
      {
        checked: false,
        text: 'Toothpaste',
      },
      {
        checked: false,
        text: 'Shampoo',
      },
      {
        checked: false,
        text: 'More random stuff',
      }
    ],
    taskList_clothes: [
      {
        checked: false,
        text: 'Underwear',
      },
      {
        checked: false,
        text: 'More random stuff',
      }
    ]
  },

  methods: {
    //addTasks
    //
    addTask_basics: function() {
      var task = this.newTask_basics.trim();
      if (task) {
        this.taskList_basics.unshift({ //Unshift instead of Push, so item will appear in the top of the list
          text: task,
          checked: false
        });
        this.newTask_basics = "";
      }
    },

    addTask_documents: function() {
      var task = this.newTask_documents.trim();
      if (task) {
        this.taskList_documents.unshift({ //Unshift instead of Push, so item will appear in the top of the list
          text: task,
          checked: false
        });
        this.newTask_documents = "";
      }
    },

    addTask_toilettries: function() {
      var task = this.newTask_toiletries.trim();
      if (task) {
        this.taskList_toiletries.unshift({ //Unshift instead of Push, so item will appear in the top of the list
          text: task,
          checked: false
        });
        this.newTask_toiletries = "";
      }
    },

    addTask_clothes: function() {
      var task = this.newTask_clothes.trim();
      if (task) {
        this.taskList_clothes.unshift({ //Unshift instead of Push, so item will appear in the top of the list
          text: task,
          checked: false
        });
        this.newTask_clothes = "";
      }
    },

    display_landingPage: function () {
      document.getElementById("ski-pakkeliste-wrapper").style.display="none";
      document.getElementById("landing-screen").style.display="block";
      document.getElementById("landing-screen").className="animationIn";
      document.getElementById("ski-pakkeliste-wrapper").className="animationOut";
    },

    //removeTasks
    //
    removeTask1: function(task) {
      var index = this.taskList_basics.indexOf(task);
      this.taskList_basics.splice(index, 1);
    },
    removeTask2: function(task) {
      var index = this.taskList_documents.indexOf(task);
      this.taskList_documents.splice(index, 1);
    },
    removeTask3: function(task) {
      var index = this.taskList_toiletries.indexOf(task);
      this.taskList_toiletries.splice(index, 1);
    },
    removeTask4: function(task) {
      var index = this.taskList_clothes.indexOf(task);
      this.taskList_clothes.splice(index, 1);
    },

    //clearList
    //
    clearList_basics: function() {
      this.taskList_basics = [];
    },
    clearList_documents: function() {
      this.taskList_documents = [];
    },
    clearList_toiletries: function() {
      this.taskList_toiletries = [];
    },
    clearList_clothes: function() {
      this.taskList_clothes = [];
    },
  }
});
