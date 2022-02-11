<div class="box mt-4 mb-4">
   <div class="flex">
      <div class="container profil">
         <div class="row">
            <div class="col text-center p-4">
               <img src="./img/male.png" class="profile-pic" alt="profile-pic">
               <p class="fw-bold mt-3">User</p>
               <p class="text-grey">user@gmail.com</p>
            </div>
         </div>
         <div class="row text-center p-2">
            <div class="col">
               <p class="fw-bold"><?= $countTodo; ?></p>
               <p class="text-grey">To do</p>
            </div>
            <div class="col">
               <p class="fw-bold"><?= $countComplete; ?></p>
               <p class="text-grey">Completed</p>
            </div>
         </div>
         <div class="row mt-3 border-top border-bottom p-3">
            <a class="btn btn-secondary" href="#">LOGOUT</a>
         </div>
      </div>
      <div class="container content">
         <div class="row border-bottom p-4">
            <div class="col-12">
               <nav class="nav">
                  <a class="nav-link <?php if($title == 'TODO | Home') echo 'active'?>" href="/">TODOS</a>
                  <a class="nav-link <?php if($title == 'TODO | Add') echo 'active'?>" href="/add">ADD</a>
                  <a class="nav-link <?php if($title == 'TODO | Remove') echo 'active'?>" href="/remove">REMOVE</a>
               </nav>
            </div>
         </div>

