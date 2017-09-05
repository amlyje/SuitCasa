<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Packing List - Charter Travel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  </head>
  <body>
    <header id="header">
      <h1>Packing List - Charter Travel</h1>
      <nav>
        <figure><img src="img/plus.png"><p>Add <br>new</p></figure>
        <figure v-on:click="print"><img src="img/print.png"><p>Print</p></figure>
        <figure><img src="img/share.png"><p>Share</p></figure>
      </nav>
    </header>
<main>
  <article id="pakkeliste">

    <section id="checklist" class="list-elements">
      <img src="img/important.png">
      <h2><input v-model="checklist" class="headings"></h2>
      <ul>
      <transition-group name="list">
        <li
          is="list-items"
          v-for="(check, index) in checks"
          v-bind:key="check.title"
          v-bind:title="check.title"
          v-on:remove="checks.splice(index, 1)"
          class="list-item"></li>
      </transition-group>
      </ul>
      <input
        v-model="newCheckText"
        v-on:keyup.enter="addNewCheck"
        placeholder="Add more items"
        class="textbox">
    </section>

    <section id="clothing" class="list-elements">
      <img src="img/bøjle.png">
      <h2><input v-model="clothing" class="headings"></h2>
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
        class="textbox">
      </section>

      <section id="toiletries" class="list-elements">
          <img src="img/toiletries.png">
        <h2><input v-model="toiletries" class="headings"></h2>
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
          class="textbox">
      </section>

      <section id="diverse" class="list-elements">
        <img src="img/ekstra.png">
        <h2><input v-model="diverse" class="headings"></h2>
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
          class="textbox">
      </section>
      <section id="newlist">
        <button v-model="newListText" v-on:click="addNewList">plus</button>
      </section>
  </article>
</main>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="js/checklist.js"></script>
    <script src="js/newlist.js"></script>
  </body>
</html>
