Vue.component('list-items', {
  template: '\
    <li>\
    <input type="checkbox" class="charter-checkbox">\
    <label for="checkbox" class="label"></label>\
      {{ title }}\
      <button v-on:click="$emit(\'remove\')" class="delete">X</button>\
    </li>\
  ',
  props: ['title']

})


new Vue({
  el: '#charter-pakkeliste',
  data: {

    checklist:'Important',
    clothing:'Clothing',
    toiletries:'Toiletries',
    diverse:'Vacation Stuff',
    newCheckText: '',
    newClothText: '',
    newToiletText: '',
    newDiverseText: '',

    checks: [
      { title: 'Passport', checked: false,},
      { title: 'Tickets', checked: false,},
      { title: 'Visa (if applicable)',},
      { title: 'Wallet',},
      { title: 'Vaccination doc.',},
      { title: 'Phone',},
      { title: 'Headphones',},
      { title: 'Camera',},
      { title: 'Charger'},
      { title: 'Medication'},
      { title: 'Adapter'}
    ],

    cloths: [
      {  title: 'Shorts',},
      {  title: 'T-shirts',},
      {  title: 'Dresses',},
      {  title: 'Tops',},
      {  title: 'Swimwear',},
      {  title: 'Shirts',},
      {  title: 'Underwear',},
      {  title: 'Jeans',},
      {  title: 'Sweatshirts',},
      {  title: 'Pyjamas'},
      {  title: 'Socks'}
    ],

    toilets: [
      {  title: 'Tootbrush and tootpaste',},
      {  title: 'Shampoo and balsam',},
      {  title: 'Body wash',},
      {  title: 'Shaver',},
      {  title: 'Sunscreen',},
      {  title: 'Body Lotion - Afersun',},
      {  title: 'Perfume',},
      {  title: 'Deodorant',},
      {  title: 'Make-up',},
      {  title: 'Hairstyling tools'}
    ],

    diverses: [
      {  title: 'Beach Towels',},
      {  title: 'Sunglasses'},
      {  title: 'Hats'},
      {  title: 'Books',},
      {  title: 'Beach bag'},
      {  title: 'Playing cards'},
      {  title: 'Sandals/flip flops'},
      {  title: 'Sneakers'},
      {  title: 'Bags'},
      {  title: 'Entertainment'}
    ],
  },

  methods: {
    addNewCheck: function() {
      this.checks.push({
        title: this.newCheckText
      })
      this.newCheckText = ''
    },

    addNewCloth: function() {
      this.cloths.push({
        title: this.newClothText
      })
      this.newClothText = ''
    },

    addNewToilet: function() {
      this.toilets.push({
        title: this.newToiletText
      })
      this.newToiletText = ''
    },

    addNewDiverse: function() {
      this.diverses.push({
        title: this.newDiverseText
      })
      this.newDiverseText = ''
    },

    print: function () {
        window.print();
    },

    check() {
        checks.checked = !checks.checked;
    },
  }
})

new Vue({
  el: '#charter-header',


methods: {
    print: function () {
      window.print();
  },
    greet: function (event) {
      // `this` inside methods point to the Vue instance
      alert('This function is unfortunately not available yet')
    }
}
})
