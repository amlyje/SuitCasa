Vue.component('list-component', {
  data: function() {
    return {
      addToList: '',
      //Array med listitems
      items: [],
    };
  },
  //Template - strukturen over hver liste
  template: '<section>'+
              '<ul>'+
                '<transition-group name="list">'+
                  '<li v-for="(item, index) in items" v-bind:key="item.item" :class="{checked: item.checked}" class="single-list-item">'+
                    '<i class="fa fa-times-circle" aria-hidden="true" v-on:click="removeListItem(index)"></i>'+
                    '<label>'+
                      '<span>{{ item.item }}</span>'+
                      '<input type="checkbox" v-model="item.checked">'+
                    '</label>'+
                  '</li>'+
                '</transition-group>'+
              '</ul>'+
              '<input class="add-item" type="text" v-model="addToList" v-on:keyup.enter="createNewListItem" placeholder="Add to list...">'+
            '</section>',

  //Metoder til at tilføje/fjerne listitems i listerne
  methods: {
    //Tilføj nyt listitem
    createNewListItem: function() {
      var addToList = this.addToList.trim();
      if (addToList) {
        this.items.push({ item: addToList, checked: false });
        this.addToList = '';
      }
    },
    //Fjern listitem
    removeListItem: function(index) {
      this.items.splice(index, 1);
    },
  },
});

new Vue({
  //el = element, hvori koden indsættet (#travel-list)
  el: '#section-wrapper',
  data: {
    addNewList: '',
    //Array med headlines
    headlines: [],
  },
  //Metoder til at tilføje/fjerne headlines til listerne
  methods:{
    //Tilføj headline
    createNewList: function() {
      var addNewList = this.addNewList.trim();
      if (addNewList) {
        this.headlines.push({ headline: addNewList });
        this.addNewList = '';
      }
    },
    //Fjern headline
    removePackageList: function(index) {
      this.headlines.splice(index, 1);
    },
    display_landingPage: function () {
      document.getElementById("section-wrapper").style.display="none";
      document.getElementById("landing-screen").style.display="block";
      document.getElementById("landing-screen").className="animationIn";
      document.getElementById("section-wrapper").className="animationOut";
    },
  },
});
