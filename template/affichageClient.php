
<div> 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <?php echo $item->getFirstname(); ?> </td>
      <td> <?php echo $item->getLastname(); ?></td>
      <td><?php echo $item->getemail(); ?></td>
    </tr>
  </tbody>
</table>
</div>