<form action="" method="POST">

  @csrf

  <label>Name</label>
  <input type="text" name="name" placeholder="Enter name" /><br/>

  <label>Email</label>
  <input type="text" name="email" placeholder="Enter eamil" /><br/>

  <label>Created Date</label>
  <input type="date" name="datefrom" placeholder="Enter name" /><br/>

  <label>End Date</label>
  <input type="date" name="dateto" placeholder="Enter name" /><br/><br/>

  <input type="submit" value="Search">

</form>