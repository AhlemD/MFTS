<!DOCTYPE html>
<html>
<head>
    <title>FMTS</title>
    <link rel="stylesheet" href="../Style/gestion.css" >
    </head>

    <body>
       <h1>Gestion des matieres</h1>
        <Select id="machine">
            
            <option value="macchi1">Macchi-1</option>
            <option value="macchi2">Macchi-2</option>
            <option value="varex">VAREX</option>
  
          </Select>
          <div id="Container">
            <div class ="matiére">

                <h3>Ajouter une nouvelle matiere</h3>
                <div id="sousLogin"> 
                <form action="../gestions.php" method="POST">
                        <span class="spans"> Code a barre</span>
                        <input placeholder="Code a barre" id="Codeabarre" name="codeabarre" type="text" ><br>
                        <span class="spans" >code palette</span>
                        <input placeholder="code palette" id="Codepalette" name="codepalette"type="text" ><br>
                        <label class="spans" for="matiére">Emplacement:</label>
                        <select id="emplacement" name="emplacement" >
                        <option></option>
                          <option value="Stock MP" name="Stock MP">Stock MP</option>
                          <option value="Stock PF" name="Stock PF">Srock PF</option>
                          <option value="production">production</option>
                        </select><br>
                        <label class="spans" for="matiére">Emplacement par zone:</label>
                        <select id="emplacementparzone" name="emplacementparzone" ></select>
                        
                    <div>
                    <button type="submit" name="Ajouter" onclick="ajouterLigne()" >Ajouter</button>
                    </div>
                </form>



                </div>
                <script src="../js/gestions.js"></script>
                   
                  </body>
                </html>