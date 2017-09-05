Vue.component('list-new', {
  template: '\
    <section id="newlist" class="list-elements">\
    <img src="img/bøjle.png">\
    <h2><input v-model="newlist" class="headings" placeholder="New Cata"></h2>\
    <transition-group name="list">\
    <ul>\
    <li is="list-new" v-for="(list, index) in lists" v-bind:key="list.title" v-bind:title="list.title" v-on:remove="list.splice(index, 1)"\
    class="list-item">\
    <input type="checkbox" class="checkbox" v-model="this.checked">\
    <label for="checkbox" class="label"></label>\
      {{ title }}\
      <button v-on:click="$emit(\'remove\')" class="delete">X</button>\
    </li>\
    </ul>\
    </transition-group>\
    <input v-model="newClothText" v-on:keyup.enter="addNewCloth" placeholder="Add more clothing" class="textbox">\
    </section>\
  ',
})

new Vue({
  el: '#pakkeliste',
  data: {
    newListText: '',

    lists: [
      { title: 'Passport',},
    ],

methods: {
  addNewList: function() {
    this.lists.push({
      title: this.newListText
    })
    this.newListText = ''
  },
