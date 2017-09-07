// JavaScript Document

Vue.component('citymodal', {
  template: '<transition name="citymodal">'+
    '<section class="cityModalMask" v-on:click="$emit(\'close\')">'+
      '<div class="cityModalWrapper">'+
        '<div class="cityModalContainer">'+
          '<slot name="header">Header</slot>'+
          '<button id="closeButton" v-on:click="$emit(\'close\')">X</button>'+
        '</div>'+
      '</div>'+
    '</section>'+
  '</transition>',
});


new Vue({

	el: '#cityPackingList',

	data: {
		cityTitle: 'My City Holiday',
		cityPrepTitle: 'Travel Preparation',
		cityElectronicsTitle: 'Electronics',
		cityBasicsTitle: 'Basics',
		cityShoesTitle: 'Shoes',
		cityClothesTitle: 'Clothes',
		cityAccessoriesTitle: 'Accessories',
		cityToiletriesTitle: 'Toiletries',
		cityOtherTitle:'Other',
		newCityPrep:'',
		newCityBasic:'',
		newCityElectronic:'',
		newCityClothes:'',
		newCityShoes:'',
		newCityAccessories:'',
		newCityToiletries:'',
		newCityOther:'',
		
		cityPreparations: [
			{text: "Check passport", checked: false}, 
			{text: "Check-in", checked: false}, 
			{text: "Check flight info", checked: false}, 
			{text: "Check baggage weight", checked: false}, 
			{text: "Personalize luggage", checked: false}, 
			{text: "Change money", checked: false},		  
		],
		
		cityBasics: [
			{text: "Passport", checked: false}, 
			{text: "Wallet", checked: false}, 
			{text: "Travel documents", checked: false},
			{text: "Medicine", checked: false}, 
			{text: "Notebook", checked: false},
			{text: "Pen", checked: false}, 
			{text: "Gum", checked: false}, 
			{text: "Book", checked: false},
			{text: "Magazine", checked: false},
			{text: "Umbrella", checked: false},
			{text: "Totebag", checked: false}, 
		],
		
		cityElectronics: [
			{text: "Computer", checked: false}, 
			{text: "+ charger", checked: false}, 
			{text: "Phone", checked: false}, 
			{text: "+ charger", checked: false}, 
			{text: "Headphones", checked: false}, 
			{text: "Powerbank", checked: false},
			{text: "Camera", checked: false},
			{text: "+ charger", checked: false},
			{text: "Converter", checked: false}
		],
		
		cityClothes: [
			{text: "Underwear", checked: false}, 
			{text: "Socks", checked: false}, 
			{text: "T-shirts", checked: false}, 
			{text: "Shirts", checked: false},
			{text: "Jeans", checked: false},
			{text: "Cardigans", checked: false},
			{text: "Jacket", checked: false},
		],
		
		cityShoes: [
			{text: "Sneakers", checked: false}, 
			{text: "Nice shoes", checked: false},
		],
		
		cityAccessories: [
			{text: "Belt", checked: false}, 
			{text: "Scarf", checked: false}, 
			{text: "Sunglasses", checked: false},  
		],
		
		cityToiletries: [
			{text: "Toothbrush", checked: false}, 
			{text: "Toothpaste", checked: false}, 
			{text: "Deodorant", checked: false},  
			{text: "Perfume", checked: false}, 
			{text: "Shampoo", checked: false}, 
			{text: "Bodywash", checked: false},
		],
		
		cityOthers:[
		],
		
		showModalSave:false,
		showModalShare:false,
		
	},


	methods: {

//Methods for Preperation		
	addCityPrep: function () {
			var cityItem = this.newCityPrep.trim();
			if (cityItem) {
				this.cityPreparations.push({
					text: cityItem,
					checked: false
				});
				this.newCityPrep = "";
			}
		},

		removeCityPreparation: function (cityItem) {
			var index = this.cityPreparations.indexOf(cityItem);
			this.cityPreparations.splice(index, 1);
		},

		
//Methods for Bacic		
		addCityBasic: function () {
			var cityItem = this.newCityBasic.trim();
			if (cityItem) {
				this.cityBasics.push({
					text: cityItem,
					checked: false
				});
				this.newCityBasic = "";
			}
		},

		removeCityBasic: function (cityItem) {
			var index = this.cityBasics.indexOf(cityItem);
			this.cityBasics.splice(index, 1);
		},		
		
//Methods for Electronics	
		addCityElectronic: function () {
			var cityItem = this.newCityElectronic.trim();
			if (cityItem) {
				this.cityElectronics.push({
					text: cityItem,
					checked: false
				});
				this.newCityElectronic = "";
			}
		},

		removeCityElectronic: function (cityItem) {
			var index = this.cityElectronics.indexOf(cityItem);
			this.cityElectronics.splice(index, 1);
		},
		
//Methods for Clothes	
		addCityClothes: function () {
			var cityItem = this.newCityClothes.trim();
			if (cityItem) {
				this.cityClothes.push({
					text: cityItem,
					checked: false
				});
				this.newCityClothes = "";
			}
		},

		removeCityClothes: function (cityItem) {
			var index = this.cityClothes.indexOf(cityItem);
			this.cityClothes.splice(index, 1);
		},
		
//Methods for Shoes	
		addCityShoe: function () {
			var cityItem = this.newCityShoes.trim();
			if (cityItem) {
				this.cityShoes.push({
					text: cityItem,
					checked: false
				});
				this.newCityShoes = "";
			}
		},

		removeCityShoes: function (cityItem) {
			var index = this.cityShoes.indexOf(cityItem);
			this.cityShoes.splice(index, 1);
		},		
		
//Methods for Accessories	
		addCityAccessories: function () {
			var cityItem = this.newCityAccessories.trim();
			if (cityItem) {
				this.cityAccessories.push({
					text: cityItem,
					checked: false
				});
				this.newCityAccessories = "";
			}
		},

		removeCityAccessories: function (cityItem) {
			var index = this.cityAccessories.indexOf(cityItem);
			this.cityAccessories.splice(index, 1);
		},
		

//Methods for Toiletries	
		addCityToiletries: function () {
			var cityItem = this.newCityToiletries.trim();
			if (cityItem) {
				this.cityToiletries.push({
					text: cityItem,
					checked: false
				});
				this.newCityToiletries = "";
			}
		},

		removeCityToiletries: function (cityItem) {
			var index = this.cityToiletries.indexOf(cityItem);
			this.cityToiletries.splice(index, 1);
		},
		
//Methods for Other	
		addCityOther: function () {
			var cityItem = this.newCityOther.trim();
			if (cityItem) {
				this.cityOthers.push({
					text: cityItem,
					checked: false
				});
				this.newCityOther = "";
			}
		},

		removeCityOther: function (cityItem) {
			var index = this.cityOthers.indexOf(cityItem);
			this.cityOthers.splice(index, 1);
		},
			
		
//End editing
		endEditing: function () {
			document.querySelector("input").blur();
		},

//A method for check. If the function is true it will return cityItem.checked = true, and .cityItemDone will be added to the li		
		check: function (cityItem) {
			cityItem.checked = true;
		},

		isChecked: function (cityItem) {
			return cityItem.checked;
		},

// For the print button		
		print: function () {
			window.print();
	},
	}
});



