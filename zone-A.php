<!DOCTYPE html>
<html>
<head>
    <title>FMTS</title>
    <link rel="stylesheet" href="../style/zone-x.css" >
    </head>
    
<body>   
    <h1>Track your material flow</h1> 
	<div class="navbar">
		<div class="dropdown">
		  <button class="dropbtn">Stock matiéres premiéres</button>
		  <div class="dropdown-content">
			<a href="../page/zone-x.php">Zone 1</a>
			<a href="../page/zone-2.php">Zone 2</a>
			<a href="../page/zone-3.php">Zone 3</a>
		  </div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Production </button>
			<div class="dropdown-content">
            <a href="../page/zones.html">Extrusion</a>
            <a href="#">Impression</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Stock produits finis</button>
			<div class="dropdown-content">
				<a href="../page/zone-A.php">Zone A</a>
				<a href="../page/zone-B.php">Zone B</a>
				<a href="../page/zone-C.php">Zone C</a>
				</div>
		</div> 
	</div>

	<div id="Container">
        <p>Quantité de Stock</p>
		
        
		<table>
			<tr>
				<th id="total" name="total" ></th>
			</tr>
    <?php include '../affichage/affichageA.php';?>
        </table>
	
</div>

<table id="mm">
    <tr>
        <th id="Palette" name="codepalette" >Palette</th>
        <th id="emplacement" name="emplacement" >Emplacement</th>
        <th id="codeabarre" name="codeabarre">code a barre</th>
        <th id="dateheure" name="dateheure" >Date et heure dentree</th>
    </tr>
    <?php include '../table/tableA.php';?>
</table>
</body>

		</html>