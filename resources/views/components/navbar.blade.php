<nav class="p-2 md:flex  md:justify-between w-full bg-slate-600 shadow-slate-400 shadow-md sticky">
    <a href="/" class="title flex   items-center mx-2">

        <img class="w-12 h-12 p-3 bg-transparent mix-blend-multiply" src="/download.png" alt="paw">
        <span class="border-l-gray-700 border-l-2 px-4 text-white text-2xl">DogsCrud</span>
    </a>


    <span onclick="menu(this)" class="absolute right-0 top-4 material-symbols-outlined text-white md:hidden mr-6" name='menu'>
        menu
    </span>
    <ul class="hidden md:flex md:flex-row md:text-[16px] flex flex-col items-center  text-2xl  text-white mx-5  " id="list">
        <li class="md:mr-10 mb-2 md:mb-0"> <a href="/dog">Add New</a></li>
        <li>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </li>

        <script>
            function menu(e) {
                const list = document.getElementById('list')



                e.name === 'menu' ? (e.name = 'close', list.classList.add('hidden')) : (e.name = 'menu', list.classList.remove('hidden'))

            }

        </script>
</nav>
