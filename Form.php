<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Document</title>
</head>
<body>



<section class="section">
    
    <div class="box_formulaire">
        
        <form action="Submit.php" method="get">
            <!-- Création des colonnes ------------------------->
        
            
                    <!-- Formulaire -------------------------------->
                    <h1 class="title is-1">Contact us</h1>
                    <div class="field">
                        <label class="label">Name </label>
                        <div class="control">
                            
                        <input class="input" type="text" name="name" placeholder="Text input" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Lastname </label>
                        <div class="control">
                        <input class="input" type="text" name="lastname" placeholder="Text input" required>
                        
                        </div>
                    </div>
                    <div class="control">
                        <label class="radio">
                        <input type="radio" name="answer" required>
                        Male
                        </label>
                        <label class="radio">
                        <input type="radio" name="answer" required>
                        Woman
                        </label>
                    </div>
                    
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                        <input class="input" type="email" name="email" placeholder="e.g. alexsmith@gmail.com" required>
                        </div>
                    </div>
                    <div class="select is-primary">
                        <select >
                            <option>Select your country</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Chile">Chile</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Venezuela">Venezuela</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="select is-primary">
                            <select>
                                <option>Autre</option>
                                    <option value="metal">Metal</option>
                                    <option value="carbonne">Carbonne</option>
                                    <option value="cuivre">Cuivre</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <textarea class="textarea" name="textearea" placeholder="Send us a message if you want"></textarea>
                    </div>
                   
                        <button class="button is-dark" type="submit">Submit</button>
                    
                
                    <!-- fin de la premiere colonne --------------->
                
    
                <div class="column right">
                  <!-- Design photo faite avec photoshop -->

                </div>
               
            
        </form>
    </div>
    <div class="hackeur"></div>


</section>
</body>
</html>