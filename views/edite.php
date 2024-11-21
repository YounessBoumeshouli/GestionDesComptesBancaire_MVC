<?php
$title = "Modifier Compte Bancaire";

ob_start()  ;
$row = mysqli_fetch_array($result);
?>
     <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Flowbite    
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
    <form class="space-y-4 md:space-y-6" id="form" method="post" action="index.php?action=store&id=<?=$row["id"]?>">
        <input type="hidden" name="id"  value="<?=$row["id"]?>" id="">
                        <div>
                            <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                            <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" value="<?=$row["nom"]?>" required="">
                        </div>
                        <div>
                            <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom</label>
                            <input type="text" name="prenom" id="prenom" placeholder="prenom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?=$row["prenom"]?>" required="">
                        </div>
                        <div>
                            <label for="nationalite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationalité</label>
                            <input type="text" name="nationalite" id="nat" placeholder="moroccan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?=$row["nationalite"]?>" required="">
                        </div>
                        <div>
                            <label for="genre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genre</label>
                            <select name="genre"    id="genre">
                                <option value="1" <?=$row["genre"] == "1" ? "selected" : ""?>>Homme</option>
                                <option value="0" <?=$row["genre"] == "0" ? "selected" : ""?>>Femme</option>
                            </select>
                        </div>
                        <div>
                            <label for="datenaissance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">date de naissance</label>
                            <input type="date" name="datenaissance" id="date" placeholder="MM-DD-YYYY" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?=$row["datenaissance"]?>" required="">
                        </div>
                       
                        <button type="submit" class="w-full text-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">update</button>
                       
                    </form> 
    </div></div></div></section>

<?php $content = ob_get_clean()?>
<?php include_once("views/layout.php");?>