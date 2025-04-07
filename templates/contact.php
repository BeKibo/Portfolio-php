<h1 class="text-4xl font-bold bg-gradient-to-r from-[#AAFCB8]  to-[#D9F9E1] text-transparent  bg-clip-text text-center uppercase">
Me contacter
</h1>


<form 
    
    method="post"
    class="border-stone-600">

<div class="flex gap-4 mb-2">
    <div class="flex flex-col gap-2">
        <label for="firstname" class=""> Votre prénom</label>
        <input 
            type="text" 
            name="firstname" 
            id="firstname" 
            placeholder="martin" 
            value="martin" 
            minlength="2"
            maxlength="80"
            class="border-2 border-[#D9F9E1] rounded-xl "
            required>
    </div>

    <div class="flex flex-col gap-2">
        <label class=""> Votre nom</label>
        <input 
            type="text" 
            name="lastname" 
            id="lastname" 
            placeholder="Dupont" 
            value="Dupont" 
            minlength="2"
            maxlength="80"
            class="border-2 border-[#D9F9E1] rounded-xl "
            required>
    </div>
</div>


    <button 
        type="submit"
        class="inline-flex whitespace-nowrap rounded-lg bg-transparent px-4 py-2 text-sm font-medium capitalize duration-200 hover:text-stone-400 hover:rounded-md  hover:drop-shadow-2md border-2 border-[#D9F9E1] rounded-xl "
    >
        envoyez
    </button>

</form>