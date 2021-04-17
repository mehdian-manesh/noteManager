<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div class="mt-8 text-2xl">
        Hi {{ auth()->user()->name }}, welcome to your NoteBook
    </div>

    <div class="mt-6 text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ipsum enim doloremque hic modi quaerat dolorem, aliquam minus praesentium facere impedit totam omnis saepe eveniet iusto corporis explicabo, quo assumenda?
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">Categoies</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Browse All categories of notes. there are some notes in each categories and every note has <strong>only one</strong> category.
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">Notes</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                See the list of all notes. you can seach in your notes by note's title or conent. each note can have a category and some tags.
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">Tags</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Browse all tags of notes. each tag may refer to multiple notes and each note can have multiple tags.
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">API</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                See the Api of the program
            </div>
        </div>
    </div>
</div>
