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
			 <h1>Your Shopping Cart</h1>
				<?php if (count($cart) > 0){ ?>
				<table>
					<thead>
						<tr>
							<th>Item Description</th>
							<th>Price</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td>Total:</td>
							<td>$<?php echo number_format($total, 2); ?></td>
						</tr>
					</tfoot>
					<tbody>
					<?php foreach ($cart as $item): ?>
					<tr>
						<td><?php htmlout($item['desc']); ?></td>
						<td>
						$<?php echo number_format($item['price'], 2); ?>
						</td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php } else { ?>
					<p>Your cart is empty!</p>
				<?php }?>
				<form action="?" method="post">
					<p>
						<a href="?">Continue shopping</a> or
						<input type="submit" name="action" value="Empty cart">
					</p>
				</form>
		</div>
	</div>

  </body>
</html>