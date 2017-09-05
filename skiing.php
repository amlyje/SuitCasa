<?php include 'inc/head.inc.php'; ?>
<link rel="stylesheet" href="css/ski-style.css">

<header>
    <a href="index.php" class="back">Back to Frontpage</a>
    <div class="login_buttons">
        <a href="login.php"><button type="button" name="Login">Login</button></a>
        <a href="sign-up.php"><button type="button" name="Sign-up">Sign up</button></a>
    </div>
</header>

<div class="list_name"> <!-- Live title editor with autofocus for better UX -->
    <input type="text" autofocus value="Sample Title For Your Skiing Inspired List" onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" />
</div>

<section class="full-container" id="ski-pakkeliste">

    <section class="col-1"> <!-- First Row -->
        <section id="todo"> <!-- First list -->
            <h2 class="ski-h2">Basics</h2>
            <div class="shadow">
              <section class="panel">
                  <input class="input" type="text" placeholder="Add new item (press enter to add)" v-model="newTask_basics" v-on:keyup.enter="addTask_basics">
                  <i class="fa fa-trash-o fa-lg delete_all" title="Remove All" aria-hidden="true" v-on:click="clearList_basics"></i>
              </section>

              <ul class="list">
                <transition-group name="list">
                  <li v-for="task in taskList_basics" v-bind:class="{done: task.checked}" v-bind:key="task.text" class="list-item">
                      <input type="checkbox" class="checkbox" v-model="task.checked">
                      <label>{{ task.text }}</label>
                      <i class="fa fa-trash-o fa-lg delete" aria-hidden="true" v-on:click="removeTask1(task)"></i>
                  </li>
                </transition>
              </ul>
            </div>
        </section>

        <section id="todo2"> <!-- Second list -->
            <h2 class="ski-h2">Documents</h2>
            <div class="shadow">
              <section class="panel">
                  <input class="input" type="text" placeholder="Add new item (press enter to add)" v-model="newTask_documents" v-on:keyup.enter="addTask_documents">
                  <i class="fa fa-trash-o fa-lg delete_all" title="Remove All" aria-hidden="true" v-on:click="clearList_documents"></i>
              </section>

              <ul class="list">
                <transition-group name="list">
                  <li v-for="task in taskList_documents" v-bind:class="{done: task.checked}" v-bind:key="task.text" class="list-item">
                      <input type="checkbox" class="checkbox" v-model="task.checked">
                      <label>{{ task.text }}</label>
                      <i class="fa fa-trash-o fa-lg delete" aria-hidden="true" v-on:click="removeTask2(task)"></i>
                  </li>
                </transition>
              </ul>
            </div>
        </section>
    </section>


    <section class="col-2"> <!-- Second row -->
        <section id="todo3"> <!-- Third list -->
            <h2 class="ski-h2">Toiletries</h2>
            <div class="shadow">
              <section class="panel">
                  <input class="input" type="text" placeholder="Add new item (press enter to add)" v-model="newTask_toiletries" v-on:keyup.enter="addTask_toilettries">
                  <i class="fa fa-trash-o fa-lg delete_all" title="Remove All" aria-hidden="true" v-on:click="clearList_toiletries"></i>
              </section>

              <ul class="list">
                <transition-group name="list">
                  <li v-for="task in taskList_toiletries" v-bind:class="{done: task.checked}" v-bind:key="task.text" class="list-item">
                      <input type="checkbox" class="checkbox" v-model="task.checked">
                      <label>{{ task.text }}</label>
                      <i class="fa fa-trash-o fa-lg delete" aria-hidden="true" v-on:click="removeTask3(task)"></i>
                  </li>
                </transition>
              </ul>
            </div>
        </section>

        <section id="todo4"> <!-- Fourth list -->
            <h2 class="ski-h2">Clothes</h2>
            <div class="shadow">
                <section class="panel">
                    <input class="input" type="text" placeholder="Add new item (press enter to add)" v-model="newTask_clothes" v-on:keyup.enter="addTask_clothes">
                    <i class="fa fa-trash-o fa-lg delete_all" title="Remove All" aria-hidden="true" v-on:click="clearList_clothes"></i>
                </section>

                <ul class="list">
                  <transition-group name="list">
                    <li v-for="task in taskList_clothes" v-bind:class="{done: task.checked}" v-bind:key="task.text" class="list-item">
                        <input type="checkbox" class="checkbox" v-model="task.checked">
                        <label>{{ task.text }}</label>
                        <i class="fa fa-trash-o fa-lg delete" aria-hidden="true" v-on:click="removeTask4(task)"></i>
                    </li>
                  </transition-group>
                </ul>
            </div>
        </section>
    </section>

    <section class="background_ski"></section>
</section>


<?php include 'inc/footer.inc.php'; ?>
