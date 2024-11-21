<?php
$title = "Modifier Compte Bancaire";

ob_start()  ;
$row = mysqli_fetch_array($result);
?>
     <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Start A trnsaction    
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
    <form class="space-y-4 md:space-y-6" id="form" method="post" action="index.php?action=startTransaction&id=<?=$row["id"]?>">
        <input type="hidden" name="id"  value="<?=$row["id"]?>" id="">
                        <div>
                            <h1 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From</h1>
                            <h2 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ><?=$row["nom"]?></h2>
                            <h2 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   ><?=$row["prenom"]?></h2>
                        </div>
                        <div>
                            <h1 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Balance</label>
                            <h2 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ><?=$row["balance"]?><?=$row["devise"]?></h2>
                        </div>
                        <div>
                            <label for="Destinations" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">id de personne</label>
                            <input type="text" name="Destinations" id="Destinations" placeholder="ex:1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >

                        </div>
                        <div>
                            <label for="montant" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">montant</label>
                            <input type="text" name="montant" id="date" placeholder="1000" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        </div>
                       
                        <button type="submit" class="w-full text-black bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">update</button>
                       
                    </form> 
    </div></div></div></section>

<?php $content = ob_get_clean()?>
<?php include_once("views/layout.php");?>