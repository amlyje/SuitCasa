  <section id="charter-body">
    <article id="charter-header">
      <h1>SuitCasa Charter Travel</h1>
      <nav id="charter-nav">
        <a href="index.php"><img src="img/back.png"><p>Back</p></a>
      <article id="charter-menu">
        <figure v-on:click="greet"><img src="img/plus.png"><p>Save</p></figure>
        <figure v-on:click="print"><img src="img/print.png"><p>Print</p></figure>
        <figure v-on:click="greet"><img src="img/share.png"><p>Share</p></figure>
      </article>
    </nav>
  </article>
<main id="charter-main">

<!--- ............................LISTERNE...................... -->
  <article id="charter-pakkeliste">

  <transition name="fade">
    <section id="charter-checklist" class="charter-list-elements">
      <img src="img/important.png">
      <h2><input v-model="checklist" class="charter-headings"></h2>
      <ul>
      <transition-group name="list">
        <li
          is="list-items"
          v-for="(check, index) in checks"
          v-bind:key="check.title"
          v-bind:title="check.title"
          v-on:remove="checks.splice(index, 1)"
          class="list-item"
          v-model="check.checked"></li>
      </transition-group>
      </ul>
      <input
        v-model="newCheckText"
        v-on:keyup.enter="addNewCheck"
        placeholder="Add more items"
        class="charter-textbox">
    </section>
  </transition>
  <transition name="fade">
    <section id="clothing" class="charter-list-elements">
      <img src="img/bøjle.png">
      <h2><input v-model="clothing" class="charter-headings"></h2>
      <ul>
      <transition-group name="list">
        <li
          is="list-items"
          v-bind:class="{done: this.checked}"
          v-for="(cloth, index) in cloths"
          v-bind:key="cloth.title"
          v-bind:title="cloth.title"
          v-on:remove="cloths.splice(index, 1)"
          class="list-item"></li>
      </transition-group>
      </ul>
      <input
        v-model="newClothText"
        v-on:keyup.enter="addNewCloth"
        placeholder="Add more clothing"
        class="charter-textbox">
      </section>
    </transition>
    <transition name="fade">
      <section id="toiletries" class="charter-list-elements">
          <img src="img/toiletries.png">
        <h2><input v-model="toiletries" class="charter-headings"></h2>
        <ul>
        <transition-group name="list">
        <li
          is="list-items"
          v-for="(toilet, index) in toilets"
          v-bind:key="toilet.title"
          v-bind:title="toilet.title"
          v-on:remove="toilets.splice(index, 1)"
          class="list-item"></li>
        </transition-group>
        </ul>
        <input
          v-model="newToiletText"
          v-on:keyup.enter="addNewToilet"
          placeholder="Add more toiletries"
          class="charter-textbox">
      </section>
    </transition>
    <transition name="fade">
      <section id="diverse" class="charter-list-elements">
        <img src="img/ekstra.png">
        <h2><input v-model="diverse" class="charter-headings"></h2>
        <ul>
        <transition-group name="list">
        <li
          is="list-items"
          v-for="(diverse, index) in diverses"
          v-bind:key="diverse.title"
          v-bind:title="diverse.title"
          v-on:remove="diverses.splice(index, 1)"
          class="list-item"></li>
        </transition-group>
        </ul>
        <input
          v-model="newDiverseText"
          v-on:keyup.enter="addNewDiverse"
          placeholder="Add more stuff"
          class="charter-textbox">
      </section>
    </transition>
  </article>
</main>
  </section>
