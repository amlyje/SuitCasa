<section id="cityHoliday" class="cityHoliday">
<section id="cityHolidayTop"> <a href="#" v-on:click="display_landingPage" id="cityBackButton">
  <p>&larr; Back to frontpage</p>
  </a> </section>
<section id="cityPackingList">

  <article>
    <h1>
      <input @keyup.enter="endEditing" v-model="cityTitle" id="cityTitle">
    </h1>

    <section id="cityLists">
      <section class="cityPackingListCategory">
        <h2>
          <input @keyup.enter="endEditing" v-model="cityPrepTitle" class="cityListTitle">
        </h2>
        <ul>
          <transition-group name="cityLists">
           <!--Use the v-for directive to render a list of items based on an array called 'cityPreparations'. Gives the label class="cityItemDone", when the method 'isChecked' has run-->
            <li v-for="cityItem in cityPreparations" v-bind:key="cityItem.text">
              <!--Making a checckbox. When clicked in runs the method 'check'-->
              <input type="checkbox" class="cityItemCheckbox" @click="check" v-model="cityItem.checked">
              <!--Label for checkbox. this is where the class="cityItemDone" is added and where the cityPreparaitons array runs through-->
              <label for="checkbox" class="cityItemLabel" :class="{cityItemDone: isChecked(cityItem)}">{{ cityItem.text }}</label>
              <!--A button for deleting an item. Runs the methos removeCityPreparation when clicked-->
              <button class="cityItemDelete" @click="removeCityPreparation(cityItem)">X</button>
            </li>
          </transition-group>
        </ul>
        <!--Input field - adds item when enter via method addCityPrep-->
        <input v-model="newCityPrep" @keyup.enter="addCityPrep" placeholder="Add item to list" class="addCityItem">
      </section>

      <section class="cityPackingListCategory">
        <h2>
          <input v-model="cityBasicsTitle" class="cityListTitle" @keyup.enter="endEditing" >
        </h2>
        <ul>
          <transition-group name="cityLists">
            <li v-for="cityItem in cityBasics" v-bind:key="cityItem.text">
              <input type="checkbox" class="cityItemCheckbox" @click="check" v-model="cityItem.checked">
              <label for="checkbox"  class="cityItemLabel" :class="{cityItemDone: isChecked(cityItem)}">{{ cityItem.text }}</label>
              <button class="cityItemDelete" @click="removeCityBasic(cityItem)">X</button>
            </li>
          </transition-group>
        </ul>
        <input v-model="newCityBasic" @keyup.enter="addCityBasic" placeholder="Add item to list" class="addCityItem">
      </section>

      <section class="cityPackingListCategory">
        <h2>
          <input v-model="cityElectronicsTitle" class="cityListTitle">
        </h2>
        <ul>
          <transition-group name="cityLists">
            <li v-for="cityItem in cityElectronics" v-bind:key="cityItem.text">
              <input type="checkbox" class="cityItemCheckbox" @click="check" v-model="cityItem.checked">
              <label for="checkbox"  class="cityItemLabel" :class="{cityItemDone: isChecked(cityItem)}">{{ cityItem.text }}</label>
              <button class="cityItemDelete" @click="removeCityElectronic(cityItem)">X</button>
            </li>
          </transition-group>
        </ul>
        <input v-model="newCityElectronic" @keyup.enter="addCityElectronic" placeholder="Add item to list" class="addCityItem">
      </section>

      <section class="cityPackingListCategory">
        <h2>
          <input v-model="cityShoesTitle" class="cityListTitle">
        </h2>
        <ul>
          <transition-group name="cityLists">
            <li v-for="cityItem in cityShoes" v-bind:key="cityItem.text">
              <input type="checkbox" class="cityItemCheckbox" @click="check" v-model="cityItem.checked">
              <label for="checkbox"  class="cityItemLabel" :class="{cityItemDone: isChecked(cityItem)}">{{ cityItem.text }}</label>
              <button class="cityItemDelete" @click="removeCityShoes(cityItem)">X</button>
            </li>
          </transition-group>
        </ul>
        <input v-model="newCityShoes" @keyup.enter="addCityShoe" placeholder="Add item to list" class="addCityItem">
      </section>

      <section class="cityPackingListCategory">
        <h2>
          <input v-model="cityClothesTitle" class="cityListTitle">
        </h2>
        <ul>
          <transition-group name="cityLists">
            <li v-for="cityItem in cityClothes" v-bind:key="cityItem.text">
              <input type="checkbox" class="cityItemCheckbox" @click="check" v-model="cityItem.checked">
              <label for="checkbox"  class="cityItemLabel" :class="{cityItemDone: isChecked(cityItem)}">{{ cityItem.text }}</label>
              <button class="cityItemDelete" @click="removeCityClothes(cityItem)">X</button>
            </li>
          </transition-group>
        </ul>
        <input v-model="newCityClothes" @keyup.enter="addCityClothes" placeholder="Add item to list" class="addCityItem">
      </section>

      <section class="cityPackingListCategory">
        <h2>
          <input v-model="cityAccessoriesTitle" class="cityListTitle">
        </h2>
        <ul>
          <transition-group name="cityLists">
            <li v-for="cityItem in cityAccessories" v-bind:key="cityItem.text">
              <input type="checkbox" class="cityItemCheckbox" @click="check" v-model="cityItem.checked">
              <label for="checkbox"  class="cityItemLabel" :class="{cityItemDone: isChecked(cityItem)}">{{ cityItem.text }}</label>
              <button class="cityItemDelete" @click="removeCityAccessories(cityItem)">X</button>
            </li>
          </transition-group>
        </ul>
        <input v-model="newCityAccessories" @keyup.enter="addCityAccessories" placeholder="Add item to list" class="addCityItem">
      </section>

      <section class="cityPackingListCategory">
        <h2>
          <input v-model="cityToiletriesTitle" class="cityListTitle">
        </h2>
        <ul>
          <transition-group name="cityLists">
            <li v-for="cityItem in cityToiletries" v-bind:key="cityItem.text">
              <input type="checkbox" class="cityItemCheckbox" @click="check" v-model="cityItem.checked">
              <label for="checkbox"  class="cityItemLabel" :class="{cityItemDone: isChecked(cityItem)}">{{ cityItem.text }}</label>
              <button class="cityItemDelete" @click="removeCityToiletries(cityItem)">X</button>
            </li>
          </transition-group>
        </ul>
        <input v-model="newCityToiletries" @keyup.enter="addCityToiletries" placeholder="Add item to list" class="addCityItem">
      </section>

      <section class="cityPackingListCategory">
        <h2>
          <input v-model="cityOtherTitle" class="cityListTitle">
        </h2>
        <ul>
          <transition-group name="cityLists">
            <li v-for="cityItem in cityOthers" v-bind:key="cityItem.text" >
              <input type="checkbox" class="cityItemCheckbox" @click="check" v-model="cityItem.checked">
              <label for="checkbox"  class="cityItemLabel" :class="{cityItemDone: isChecked(cityItem)}">{{ cityItem.text }}</label>
              <button class="cityItemDelete" @click="removeCityOther(cityItem)">X</button>
            </li>
          </transition-group>
        </ul>
        <input v-model="newCityOther" @keyup.enter="addCityOther" placeholder="Add item to list" class="addCityItem">
      </section>
    </section>
  </article>

  <aside id="cityButtons">
    <button class="cityButtons" id="citySaveButton" v-on:click="showModalSave = true"><i><img class="cityButtonsIcons" src="img/citySaveIcon.png" alt="Save Icon"></i></button>
    <citymodal v-if="showModalSave" v-on:close="showModalSave = false"> <span slot="header">Your list has been saved!</span> </citymodal>

    <button class="cityButtons" id="cityShareButton" v-on:click="showModalShare = true"><i><img class="cityButtonsIcons" src="img/cityShareIcon.png" alt="Share Icon"></i></button>
    <citymodal v-if="showModalShare" v-on:close="showModalShare = false"> <span slot="header">Your list has been shared!</span> </citymodal>

    <button class="cityButtons" id="cityPrintButton" v-on:click="print"><i><img class="cityButtonsIcons" src="img/cityPrintIcon.png" alt="Print Icon"></i></button>
  </aside>

</section>
</section>
