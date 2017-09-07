<section id="section-wrapper">
  <figure>
    <span>
      SuitCasa
    </span>
  </figure>

  <section id="travel-list">
    <!-- Tilføj ny liste -->
    <aside>
      <label>
        <p>Add list</p>
        <input type="text" v-model="addNewList" v-on:keyup.enter="createNewList" placeholder="List name...">
      </label>
      <button type="submit" v-on:click="createNewList"><i class="fa fa-plus" aria-hidden="true"></i></button>
    </aside>

    <!-- Section med lister -->
    <section class="check-list">
      <transition-group name="list" class="list-transition">
        <!-- article med v-for loop, der udskriver hver overskrift i headlines arrayet + list-component (se linje 35) -->
        <article v-cloak v-for="(headline, index) in headlines" v-bind:key="headline.headline" class="list-item">
          <h2>{{headline.headline}}<i class="fa fa-times" aria-hidden="true" v-on:click="removePackageList(index)" title="Remove list"></i></h2>
          <!-- list-component - se template i main.js -->
          <list-component></list-component>
        </article>
      </transition-group>
    </section>
  </section>
</section>
