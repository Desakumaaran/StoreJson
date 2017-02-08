
<table class="table table-bordered table-hover" style="margin-top: 46px;">
	<thead>
	  <tr>
		<th>Name</th>
		<th>Password</th>
        <th>Action</th>
	    
		
	  </tr>
	</thead>
	<tbody>
<?php
$str = file_get_contents('results.json');
$json = json_decode($str, true); // decode the JSON into an associative array
        
        echo '<pre>' . print_r($json, true) . '</pre>';

	foreach ($json as $k => $v) {
?>
    
	  <tr>
		<td><?php echo $v['name']; ?></td>
		<td><?php  echo $v['pwd']; ?></td>
	    
	    
	  <td>
		
		<button class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $k; ?>')" >Delete</button>
        <a href="edituser.html?id=<?php echo $k; ?>&name=<?php echo $v['name']; ?>&pwd=<?php echo $v['pwd']; ?>" type="button" class="btn btn-success">Edit</a>
		</td>
	    </tr>

<?php
                              }
?>

	</tbody>
      </table>
	  

