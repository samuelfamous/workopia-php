 <?php
    // require basePath('/views/partials/head.php');
    loadPartial('head');
    ?>
 <!-- Nav -->
 <?php
    require basePath('/views/partials/navbar.php') ?>

 <!-- showcase -->
 <?php require basePath('views/partials/showcase-search.php'); ?>

 <!-- top-banner -->
 <?php require basePath('views/partials/top-banner.php'); ?>

 <!-- job listings -->
 <section>
     <div class="container mx-auto p-4 mt-4">
         <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Recents Jobs</div>
         <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
             <!-- Job Listing 1: Software Engineer -->
             <div class="rounded-lg shadow-md bg-white">
                 <div class="p-4">
                     <h2 class="text-xl font-semibold">Software Engineer</h2>
                     <p class="text-gray-700 text-lg mt-2">We are seeking a skilled software engineer to develop high-quality software solutions.</p>
                     <ul class="my-4bg-gray-100 p-4 rounded">
                         <li class="mb-2"><strong>Salary:</strong>$80,000</li>
                         <li class="mb-2"><strong>Location:</strong>New York</li>
                         <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
                     </ul>
                     <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo">Details</a>
                 </div>
             </div>
             <!-- Job Listing 1: Software Engineer -->
             <div class="rounded-lg shadow-md bg-white">
                 <div class="p-4">
                     <h2 class="text-xl font-semibold">Software Engineer</h2>
                     <p class="text-gray-700 text-lg mt-2">We are seeking a skilled software engineer to develop high-quality software solutions.</p>
                     <ul class="my-4bg-gray-100 p-4 rounded">
                         <li class="mb-2"><strong>Salary:</strong>$80,000</li>
                         <li class="mb-2"><strong>Location:</strong>New York</li>
                         <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
                     </ul>
                     <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo">Details</a>
                 </div>
             </div>
             <!-- Job Listing 1: Software Engineer -->
             <div class="rounded-lg shadow-md bg-white">
                 <div class="p-4">
                     <h2 class="text-xl font-semibold">Software Engineer</h2>
                     <p class="text-gray-700 text-lg mt-2">We are seeking a skilled software engineer to develop high-quality software solutions.</p>
                     <ul class="my-4bg-gray-100 p-4 rounded">
                         <li class="mb-2"><strong>Salary:</strong>$80,000</li>
                         <li class="mb-2"><strong>Location:</strong>New York</li>
                         <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
                     </ul>
                     <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo">Details</a>
                 </div>
             </div>
             <!-- Job Listing 1: Software Engineer -->
             <div class="rounded-lg shadow-md bg-white">
                 <div class="p-4">
                     <h2 class="text-xl font-semibold">Software Engineer</h2>
                     <p class="text-gray-700 text-lg mt-2">We are seeking a skilled software engineer to develop high-quality software solutions.</p>
                     <ul class="my-4bg-gray-100 p-4 rounded">
                         <li class="mb-2"><strong>Salary:</strong>$80,000</li>
                         <li class="mb-2"><strong>Location:</strong>New York</li>
                         <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
                     </ul>
                     <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo">Details</a>
                 </div>
             </div>
             <!-- Job Listing 1: Software Engineer -->
             <div class="rounded-lg shadow-md bg-white">
                 <div class="p-4">
                     <h2 class="text-xl font-semibold">Software Engineer</h2>
                     <p class="text-gray-700 text-lg mt-2">We are seeking a skilled software engineer to develop high-quality software solutions.</p>
                     <ul class="my-4bg-gray-100 p-4 rounded">
                         <li class="mb-2"><strong>Salary:</strong>$80,000</li>
                         <li class="mb-2"><strong>Location:</strong>New York</li>
                         <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
                     </ul>
                     <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo">Details</a>
                 </div>
             </div>
             <!-- Job Listing 1: Software Engineer -->
             <div class="rounded-lg shadow-md bg-white">
                 <div class="p-4">
                     <h2 class="text-xl font-semibold">Software Engineer</h2>
                     <p class="text-gray-700 text-lg mt-2">We are seeking a skilled software engineer to develop high-quality software solutions.</p>
                     <ul class="my-4bg-gray-100 p-4 rounded">
                         <li class="mb-2"><strong>Salary:</strong>$80,000</li>
                         <li class="mb-2"><strong>Location:</strong>New York</li>
                         <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
                     </ul>
                     <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo">Details</a>
                 </div>
             </div>
         </div>
     </div>
     <a href="listings.html" class="block text-xl text-center">Show All Jobs</a>
 </section>

 <!-- bottom-banner -->
 <?php require basePath('/views/partials/bottom-banner.php'); ?>

 <!-- footer -->
 <?php require basePath('views/partials/footer.php'); ?>