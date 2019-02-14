<?php require('partials/head.php'); ?>;
 
 <h1>Current Tasks</h1>
 <div>
  <ul>
    <?php foreach($tasks as $task): ?>
      <?php if($task->completed): ?>
        <ul><strike><?= $task->description; ?></strike></ul>
      <?php else: ?>
        <ul><?= $task->description; ?></ul>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
</div>

<h2>Enter a task description</h2>
<form action="/tasks" method="post">
  <div>
    <label for="description">Description:</label>
    <input name="description" id="description">
    </div>
    <div>
      <label for="completed">Is completed:</label>
      <input name="completed" id="completed">
    </div>
    <div>
    <button>Save</button>
  </div>
</form>
<?php require('partials/footer.php'); ?>;