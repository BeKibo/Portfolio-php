<form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
            <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">Prénom</label>
            <div class="mt-2.5">
                <input type="text" name="first-name" id="first-name" autocomplete="given-name"  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-[#D9F9E1] placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#D9F9E1] border-2 border-[#D9F9E1]" required>
            </div>
        </div>
        <div>
            <label for="last-name" class="block text-sm/6 font-semibold text-gray-900">Nom</label>
            <div class="mt-2.5">
                <input type="text" name="last-name" id="last-name" autocomplete="family-name"  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-[#D9F9E1] placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#D9F9E1] border-2 border-[#D9F9E1]" required>
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="company" class="block text-sm/6 font-semibold text-gray-900">Entreprise</label>
            <div class="mt-2.5">
                <input type="text" name="company" id="company" autocomplete="organization"  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-[#D9F9E1] placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#D9F9E1] border-2 border-[#D9F9E1]">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="email" class="block text-sm/6 font-semibold text-gray-900">Adresse email</label>
            <div class="mt-2.5">
                <input type="email" name="email" id="email" autocomplete="email"  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-[#D9F9E1] placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#D9F9E1] border-2 border-[#D9F9E1]" required>
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
            <div class="mt-2.5">
                <textarea name="message" id="message" rows="4"  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-[#D9F9E1] placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#D9F9E1] border-2 border-[#D9F9E1]" required></textarea>
            </div>
        </div>
    </div>
    <div class="mt-10">
    <button
type="submit"
class="mb-5 block w-full rounded-md bg-[#D9F9E1] px-3.5 py-2.5 text-center text-sm font-semibold text-gray hover:text-white shadow-xs hover:bg-[#94e6aa] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#D9F9E1] border-2 border-[#D9F9E1] "
>
Envoyer
</button>

    </div>
</form>