<?php 
	include_once  'includes/helpers.inc.php'; 
 
	
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Shopping Cart</title>
	
	<style>
		table {
			border-collapse: collapse;
		}
		td, th {
			border: 1px solid black;
		}
	</style>
  </head>
  <body>
    <div class="">
		 <div class="">
			<p> your shopping cart contains 
				<?php 
					echo $total = ( isset( $_SESSION['cart'] ) ) ? count($_SESSION['cart']) : 0; 
				?> items. 
			</p>
			<p> <a href="?cart"> View your cart </a> </p>
		<table class="">
		  <thead>
			<tr>
				<th>Item Description</th>
				<th>Price</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($items as $item): ?>
				<tr>
					<td><?php htmlout($item['desc']); ?></td>
					<td> $<?php echo number_format($item['price'], 2); ?> </td>
					<td>
						<form action="" method="post">
							<div>
								<input type="hidden" name="id" value="<?php
								htmlout($item['id']); ?>">
								<input type="submit" name="action" value="Buy">
							</div>
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		
		</div>
	</div>

  </body>
</html>