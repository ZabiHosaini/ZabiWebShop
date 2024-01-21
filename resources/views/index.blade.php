<!DOCTYPE html>

<title> Webshop</title> 
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<body style="font-family: open sans">
<section class="px-6 py-8">
        <nav class="flex justify-between items-center">
            <div>
                <a href="/">
                    <img src="./images/filalogo.png" width="165" height="16" alt="">
                </a>
            </div>
           <div>
            <a href="/" class="text-xs text-black font-bold uppercase">Home Page</a>
            <a href="" class="bg-blue-500 ml-6 rounded-full text-xs fond-semibold text-white uppercase py-3 px-5">Subscribe for Update</a>
           </div>
        </nav>
        <header class="max-w-lg mx-auto mt-20 text-center">
            <div class="max-w-xl mx-auto">
               
                     <h1 class="text-2xl">
                        BEST <span class="text-blue-500">SPORT KLEDING</span>  IN HET WIERELD!
                    </h1> 

                    <h2 class="inline-flex mt-2"> Door Zabi Hosaini <img src="./images/user.jpg" width="30" height="20"  alt=""> </h2>
                    <p class="text-sm mt-14">
                    Sportconfex started its business in the beginning of the 90's, as a professional organization dedicated to the production of sport clothing. 
                    Since Sportconfex started, it has experienced tremendous growth and became known as a reliable producer of sport clothes. 
                    The company has a professional team of highly qualified designers (for both artwork and patterns) and administrative staff, 
                    </p>
                    <div class="tw-flex tw-justity-censter mt-8 space-x-8">
                        <span class="relative bg-gray-100 inline-flex items-center rounded-xl">
                            <select class="appearance-none bg-transparent py-2 px-5 text-sm font-semibold"> 
                                <option value="Categorie" disabled selected>Categorie </option>
                                <option value="Koersbroek">Koersbroek</option>
                                <option value="Wielershirt">Wielershirt</option>
                                <option value="Rubberpakken">Rubberpakken</option>
                            </select>
                            <span style="right:12px;" class="transform rotate-30 absolute pointer-events-none" width="22" height="12">&#11167;</span>
                        </span> 

                        <span class="relative bg-gray-100 inline-flex items-center rounded-xl">
                            <select class="appearance-none bg-transparent py-2 px-5 text-sm font-semibold"> 
                                <option value="Categorie" disabled selected>Filter </option>
                                <option value="foo">Foo</option>
                               
                                <option value="bardsfdsf">Bardfds</option>
                            </select>
                            <span style="right:12px;" class="transform rotate-30 absolute pointer-events-none" width="22" height="12">&#11167;</span>
                        </span> 
                        <span class="relative bg-gray-100 inline-flex items-center rounded-xl px-3 py-2">
                           <form action="#" method="GET">
                           <input class="bg-transprent placeholder-black font-semibold text-sm" type="search" placeholder="Search...">

        
                           </form>
                        </span> 
                    </div>
                    
                
            </div>
        </header>
        <main class="max-w-6xl mx-auto mt-20 space-y-6">
            <article class="transition-colors duraion-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5bg-gray-100  rounded-xl">
                <div class="py-6 px-8 flex">
                    <div class="flex-1 mr-6">
                      <img src="./images/i1.jpg" alt="Blog Post" class="rounded-xl">
                    </div>
                   
                    <div class="flex-1 flex flex-col justify-between">
                      <header>
                        <div class="space-x-2">
                           <a href="" class="px-3 py-2 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">technick</a>
                           <a href="" class="px-3 py-2 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold">updates</a>
                        </div>
                        <div class="mt-4">
                            <h1 class="text-3xl"> Zo hebben wij de sport- en fitnesskleding getest</h1>
                            <span class="mr-2 block mt-2 block text-gray-400 text-xs">
                            <time> published 1 day ago</time>
                            </span>
                        </div>
                        
                      </header>
                      <div class="text-sm mt-2">
                        <p> Wil je fitness- en sportkleding uittesten, dan zal je het in praktijk moeten brengen. Dat doe je door het aan te trekken en er op uit te trekken. Hoe grondiger je je inspant, hoe meer je door zult krijgen of het artikel bij je past, of het comfortabel is en opgewassen tegen alle weers- en lichaamsomstandigheden. Alleen de beste sport- en fitnessartikelen slagen voor de test.</p>
                      </div>
                      <footer class="flex justify-between item-center mt-8">
                        <div class="flex items-center text=sm">
                            <img src="./images/user.jpg" width="30" height="20"  alt="">
                            <div class="ml-3">
                                <h5 class="font-bold">Lary laracast</h5>
                                <h6>mascot at laracast</h6>
                            </div>
                          
                        </div>
                        <div>
                            <a href="" class="text-xs font-semibold bg-gray-200 rounded-full py-2 px-6">Read more</a>
                        </div>
                    </footer>
                    </div>
                </div>
            </article>
            <div class="grid grid-cols-2">
                <article class="transition-colors duraion-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-8">
                        <div class="">
                        <img src="./images/i2.jpg" alt="Blog Post" class="rounded-xl">
                        </div>
                    
                        <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                            <a href="" class="px-3 py-2 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">technick</a>
                            <a href="" class="px-3 py-2 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold">updates</a>
                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl"> Zo hebben wij de sport- en fitnesskleding getest</h1>
                                <span class="mr-2 block mt-2 block text-gray-400 text-xs">
                                <time> published 1 day ago</time>
                                </span>
                            </div>
                            
                        </header>
                        <div class="text-sm mt-4">
                            <p> Wil je fitness- en sportkleding uittesten, dan zal je het in praktijk moeten brengen. Dat doe je door het aan te trekken en er op uit te trekken. Hoe grondiger je je inspant, hoe meer je door zult krijgen of het artikel bij je past, of het comfortabel is en opgewassen tegen alle weers- en lichaamsomstandigheden. Alleen de beste sport- en fitnessartikelen slagen voor de test.</p>
                        </div>
                        <footer class="flex justify-between item-center mt-8">
                            <div class="flex items-center text=sm">
                                <img src="./images/user.jpg" width="30" height="20"  alt="">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary laracast</h5>
                                    <h6>mascot at laracast</h6>
                                </div>
                            
                            </div>
                            <div>
                                <a href="" class="text-xs font-semibold bg-gray-200 rounded-full py-2 px-6">Read more</a>
                            </div>
                        </footer>
                        </div>
                    </div>
                </article>
                <article class="transition-colors duraion-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-8">
                        <div class="">
                        <img src="./images/i2.jpg" alt="Blog Post" class="rounded-xl">
                        </div>
                    
                        <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                            <a href="" class="px-3 py-2 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">technick</a>
                            <a href="" class="px-3 py-2 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold">updates</a>
                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl"> Zo hebben wij de sport- en fitnesskleding getest</h1>
                                <span class="mr-2 block mt-2 block text-gray-400 text-xs">
                                <time> published 1 day ago</time>
                                </span>
                            </div>
                            
                        </header>
                        <div class="text-sm mt-4">
                            <p> Wil je fitness- en sportkleding uittesten, dan zal je het in praktijk moeten brengen. Dat doe je door het aan te trekken en er op uit te trekken. Hoe grondiger je je inspant, hoe meer je door zult krijgen of het artikel bij je past, of het comfortabel is en opgewassen tegen alle weers- en lichaamsomstandigheden. Alleen de beste sport- en fitnessartikelen slagen voor de test.</p>
                        </div>
                        <footer class="flex justify-between item-center mt-8">
                            <div class="flex items-center text=sm">
                                <img src="./images/user.jpg" width="30" height="20"  alt="">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary laracast</h5>
                                    <h6>mascot at laracast</h6>
                                </div>
                            
                            </div>
                            <div>
                                <a href="" class="text-xs font-semibold bg-gray-200 rounded-full py-2 px-6">Read more</a>
                            </div>
                        </footer>
                        </div>
                    </div>
                </article>
            </div>
            <div class="grid grid-cols-3">
                <article class="transition-colors duraion-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-8">
                        <div class="">
                        <img src="./images/i3.jpg" alt="Blog Post" class="rounded-xl">
                        </div>
                    
                        <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                            <a href="" class="px-3 py-2 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">technick</a>
                            <a href="" class="px-3 py-2 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold">updates</a>
                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl"> Zo hebben wij de sport- en fitnesskleding getest</h1>
                                <span class="mr-2 block mt-2 block text-gray-400 text-xs">
                                <time> published 1 day ago</time>
                                </span>
                            </div>
                            
                        </header>
                        <div class="text-sm mt-4">
                            <p> Wil je fitness- en sportkleding uittesten, dan zal je het in praktijk moeten brengen. Dat doe je door het aan te trekken en er op uit te trekken. Hoe grondiger je je inspant, hoe meer je door zult krijgen of het artikel bij je past, of het comfortabel is en opgewassen tegen alle weers- en lichaamsomstandigheden. Alleen de beste sport- en fitnessartikelen slagen voor de test.</p>
                        </div>
                        <footer class="flex justify-between item-center mt-8">
                            <div class="flex items-center text=sm">
                                <img src="./images/user.jpg" width="30" height="20"  alt="">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary laracast</h5>
                                    <h6>mascot at laracast</h6>
                                </div>
                            
                            </div>
                            <div>
                                <a href="" class="text-xs font-semibold bg-gray-200 rounded-full py-2 px-6">Read more</a>
                            </div>
                        </footer>
                        </div>
                    </div>
                </article>
                <article class="transition-colors duraion-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-8">
                        <div class="">
                        <img src="./images/i3.jpg" alt="Blog Post" class="rounded-xl">
                        </div>
                    
                        <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                            <a href="" class="px-3 py-2 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">technick</a>
                            <a href="" class="px-3 py-2 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold">updates</a>
                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl"> Zo hebben wij de sport- en fitnesskleding getest</h1>
                                <span class="mr-2 block mt-2 block text-gray-400 text-xs">
                                <time> published 1 day ago</time>
                                </span>
                            </div>
                            
                        </header>
                        <div class="text-sm mt-4">
                            <p> Wil je fitness- en sportkleding uittesten, dan zal je het in praktijk moeten brengen. Dat doe je door het aan te trekken en er op uit te trekken. Hoe grondiger je je inspant, hoe meer je door zult krijgen of het artikel bij je past, of het comfortabel is en opgewassen tegen alle weers- en lichaamsomstandigheden. Alleen de beste sport- en fitnessartikelen slagen voor de test.</p>
                        </div>
                        <footer class="flex justify-between item-center mt-8">
                            <div class="flex items-center text=sm">
                                <img src="./images/user.jpg" width="30" height="20"  alt="">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary laracast</h5>
                                    <h6>mascot at laracast</h6>
                                </div>
                            
                            </div>
                            <div>
                                <a href="" class="text-xs font-semibold bg-gray-200 rounded-full py-2 px-6">Read more</a>
                            </div>
                        </footer>
                        </div>
                    </div>
                </article>
                <article class="transition-colors duraion-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-8">
                        <div class="">
                        <img src="./images/i3.jpg" alt="Blog Post" class="rounded-xl">
                        </div>
                    
                        <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                            <a href="" class="px-3 py-2 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">technick</a>
                            <a href="" class="px-3 py-2 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold">updates</a>
                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl"> Zo hebben wij de sport- en fitnesskleding getest</h1>
                                <span class="mr-2 block mt-2 block text-gray-400 text-xs">
                                <time> published 1 day ago</time>
                                </span>
                            </div>
                            
                        </header>
                        <div class="text-sm mt-4">
                            <p> Wil je fitness- en sportkleding uittesten, dan zal je het in praktijk moeten brengen. Dat doe je door het aan te trekken en er op uit te trekken. Hoe grondiger je je inspant, hoe meer je door zult krijgen of het artikel bij je past, of het comfortabel is en opgewassen tegen alle weers- en lichaamsomstandigheden. Alleen de beste sport- en fitnessartikelen slagen voor de test.</p>
                        </div>
                        <footer class="flex justify-between item-center mt-8">
                            <div class="flex items-center text=sm">
                                <img src="./images/user.jpg" width="30" height="20"  alt="">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary laracast</h5>
                                    <h6>mascot at laracast</h6>
                                </div>
                            
                            </div>
                            <div>
                                <a href="" class="text-xs font-semibold bg-gray-200 rounded-full py-2 px-6">Read more</a>
                            </div>
                        </footer>
                        </div>
                    </div>
                </article>
            </div>
        </main>
       <footer class="bg-gray-100 border border-black border-opacity-0 border-opacity-5 rounded-xl text-center py-18 px-12 mt-16">
          <img src="./images/user.jpg"  alt="" class="mx-auto" style="width: 145px;">
          <h5 class="text-3xl">Stay in touch with latest post</h5>
          <p class="text-sm">Promis to keep the inbox clean. Noe bugs</p>
          <div class="mt-10">
            <div class="relative inline-block mx-auto bg-gray-200  rounded-full">
            
                <form action="" method="POST" class="flex text-sm items-center text-sm">
                    <div class="py-3 px-5 inline-flex items-censter">
                        <label for="email">
                        <img src="./images/Email.png" alt="mailbox" style="width:30px; height:30px; " class="mt-1 flex-center ">
                        </label>
                    
                        <input type="text" placeholder="Your emailadres" class="bg-transparent  pl-4 focus-within:outline-none py-3 px-5">
                    </div>
                    
                    <button type="submit"class="bg-blue-500 hover:bg-blue-600 ml-6 rounded-full text-xs fond-semibold text-white uppercase py-3 px-6">Subscribe</button>
                </form>
            </div>

          </div>
       </footer>

</section>
</BOdy>
