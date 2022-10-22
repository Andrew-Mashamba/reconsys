<div>
    <div class="w-full">
        <!-- message container -->

        <div>

            <div class="flex">

                <div class="container mx-auto ">



                    <div class="flex flex-col w-full" >

                        <div  class="m-2 metric-card  dark:bg-gray-900 border @if($this->item == 2) bg-blue-200 border-blue-200 dark:border-blue-800  @else bg-white  border-gray-200 dark:border-gray-800 @endif rounded-lg p-4 max-w-72 w-full" >


                            <div class="flex justify-end items-center w-full">
                                <div class="flex items-center space-x-5" >

                                    <svg wire:click="visit(2)" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-9 bg-slate-50 rounded-full stroke-slate-400 p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>

                                    <svg wire:click="showDiv"  xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-9 bg-slate-50 rounded-full stroke-slate-400 p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>

                                </div>
                            </div>



                            <div class="flex w-full bg-gray-100 rounded rounded-lg shadow-sm">
                                <!-- message container -->


                                    <div class="m-2 w-1/3 metric-card  dark:bg-gray-900 border bg-white  border-gray-200 dark:border-gray-800 rounded-lg p-4">

                                        <div class="flex items-center text-sm mb-2 font-semibold spacing-sm text-slate-600" >CREATE THIRD PART NODE

                                        </div>


                                        <div class="my-4 pb-px">

                                            <x-jet-label for="sourceofdata" value="Source Of Data" />

                                            <div class="w-full flex items-center text-sm mb-2 font-semibold spacing-sm text-slate-600" id="sourceofdata">

                                                <div class="w-1/2 flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
                                                    <input wire:model='sourceOfData' id="bordered-radio-1" type="radio" value="Portal" name="sourceofdata" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Web Portal</label>
                                                </div>
                                                <div class="ml-2 w-1/2 flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
                                                    <input checked wire:model='sourceOfData' id="bordered-radio-2" type="radio" value="Database" name="sourceofdata" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="bordered-radio-2" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Database</label>
                                                </div>

                                            </div>


                                            <div class="p-3" >

                                                <table>

                                                    <tr>
                                                        <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">NODE_NAME</td>
                                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                            <div class="col-span-6 sm:col-span-4 mr-1">
                                                                <x-jet-input id="NODE_NAME" type="text" class="mt-1 block w-full" wire:model.defer="NODE_NAME" autocomplete="NODE_NAME" />
                                                                <x-jet-input-error for="NODE_NAME" class="mt-2" />
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    @if($this->sourceOfData == 'Database')

                                                    <tr>
                                                        <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">NODE_DB_HOST</td>
                                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                            <div class="col-span-6 sm:col-span-4 mr-1">
                                                                <x-jet-input id="NODE_DB_HOST" type="text" class="mt-1 block w-full" wire:model.defer="NODE_DB_HOST" autocomplete="NODE_DB_HOST" />
                                                                <x-jet-input-error for="NODE_DB_HOST" class="mt-2" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">NODE_DB_PORT</td>
                                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                            <div class="col-span-6 sm:col-span-4 mr-1">
                                                                <x-jet-input id="NODE_DB_PORT" type="text" class="mt-1 block w-full" wire:model.defer="NODE_DB_PORT" autocomplete="NODE_DB_PORT" />
                                                                <x-jet-input-error for="NODE_DB_PORT" class="mt-2" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">NODE_DB_DATABASE</td>
                                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                            <div class="col-span-6 sm:col-span-4 mr-1">
                                                                <x-jet-input id="NODE_DB_DATABASE" type="text" class="mt-1 block w-full" wire:model.defer="NODE_DB_DATABASE" autocomplete="NODE_DB_DATABASE" />
                                                                <x-jet-input-error for="NODE_DB_DATABASE" class="mt-2" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">NODE_DB_USERNAME</td>
                                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                            <div class="col-span-6 sm:col-span-4 mr-1">
                                                                <x-jet-input id="NODE_DB_USERNAME" type="text" class="mt-1 block w-full" wire:model.defer="NODE_DB_USERNAME" autocomplete="NODE_DB_USERNAME" />
                                                                <x-jet-input-error for="NODE_DB_USERNAME" class="mt-2" />
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">NODE_DB_PASSWORD</td>
                                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                            <div class="col-span-6 sm:col-span-4 mr-1">
                                                                <x-jet-input id="NODE_DB_PASSWORD" type="text" class="mt-1 block w-full" wire:model.defer="NODE_DB_PASSWORD" autocomplete="NODE_DB_PASSWORD" />
                                                                <x-jet-input-error for="NODE_DB_PASSWORD" class="mt-2" />
                                                            </div>
                                                        </td>
                                                    </tr>

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_NAME</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_NAME" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_NAME" autocomplete="DB_TABLE_NAME" />
                                                                    <x-jet-input-error for="DB_TABLE_NAME" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_REFERENCE</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_REFERENCE" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_REFERENCE" autocomplete="DB_TABLE_REFERENCE" />
                                                                    <x-jet-input-error for="DB_TABLE_REFERENCE" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_DATE</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_DATE" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_DATE" autocomplete="DB_TABLE_DATE" />
                                                                    <x-jet-input-error for="DB_TABLE_DATE" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_AMOUNT</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_AMOUNT" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_AMOUNT" autocomplete="DB_TABLE_AMOUNT" />
                                                                    <x-jet-input-error for="DB_TABLE_AMOUNT" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_SENDER</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_SENDER" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_SENDER" autocomplete="DB_TABLE_SENDER" />
                                                                    <x-jet-input-error for="DB_TABLE_SENDER" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_RECEIVER</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_RECEIVER" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_RECEIVER" autocomplete="DB_TABLE_RECEIVER" />
                                                                    <x-jet-input-error for="DB_TABLE_RECEIVER" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_DESCRIPTION</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_DESCRIPTION" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_DESCRIPTION" autocomplete="DB_TABLE_DESCRIPTION" />
                                                                    <x-jet-input-error for="DB_TABLE_DESCRIPTION" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_STATUS</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_STATUS" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_STATUS" autocomplete="DB_TABLE_STATUS" />
                                                                    <x-jet-input-error for="DB_TABLE_STATUS" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_SERVICE_IDENTIFIER</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_SERVICE_IDENTIFIER" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_SERVICE_IDENTIFIER" autocomplete="DB_TABLE_SERVICE_IDENTIFIER" />
                                                                    <x-jet-input-error for="DB_TABLE_SERVICE_IDENTIFIER" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_CLIENT_IDENTIFIER</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_CLIENT_IDENTIFIER" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_CLIENT_IDENTIFIER" autocomplete="DB_TABLE_CLIENT_IDENTIFIER" />
                                                                    <x-jet-input-error for="DB_TABLE_CLIENT_IDENTIFIER" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="mt-2 text-sm font-semibold  text-slate-400 dark:text-white capitalize  ">DB_TABLE_TRANSACTION_TYPE</td>
                                                            <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  text-slate-400  dark:text-white  text-right">

                                                                <div class="col-span-6 sm:col-span-4 mr-1">
                                                                    <x-jet-input id="DB_TABLE_TRANSACTION_TYPE" type="text" class="mt-1 block w-full" wire:model.defer="DB_TABLE_TRANSACTION_TYPE" autocomplete="DB_TABLE_TRANSACTION_TYPE" />
                                                                    <x-jet-input-error for="DB_TABLE_TRANSACTION_TYPE" class="mt-2" />
                                                                </div>
                                                            </td>
                                                        </tr>


                                                </table>

                                            </div>

                                        </div>


                                    </div>


                                    <div class="m-2 w-2/3 metric-card  dark:bg-gray-900 border bg-white  border-gray-200 dark:border-gray-800 rounded-lg p-4">

                                        <div class="flex items-center text-sm mb-2 font-semibold spacing-sm text-slate-600" >SOURCE DATA TABLE CONFIGURATION

                                        </div>


                                        <div class="my-4 pb-px">

                                            <div class="p-3">


                                                <div class="col-span-6 sm:col-span-4">

                                                    <x-jet-label for="formFileCb" value="Query" />


                                                    <form>
                                                        <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                                                            <div class="flex justify-between items-center py-2 px-3 border-b dark:border-gray-600">
                                                                <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">

                                                                </div>
                                                                <button type="button" data-tooltip-target="tooltip-fullscreen" class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                                                    <span class="sr-only">Full screen</span>
                                                                </button>
                                                                <div id="tooltip-fullscreen" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                                                    Show full screen
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </div>
                                                            <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
                                                                <label for="editor" class="sr-only">Publish post</label>
                                                                <textarea id="editor" rows="8" class="block px-0 w-full text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="" required></textarea>
                                                            </div>
                                                        </div>

                                                    </form>


                                                </div>

                                            </div>
                                        </div>


                                    </div>

                            </div>

                            <div class="bg-white pt-4 pb-4 ">

                                <div class="flex justify-end w-auto" >
                                    <div wire:loading wire:target="save" >
                                        <button class="text-white bg-blue-400 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-400 dark:hover:bg-blue-400 dark:focus:ring-blue-400" disabled>
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-white-800" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />

                                                </svg>
                                                <p>Please wait...</p>
                                            </div>
                                        </button>
                                    </div>

                                </div>


                                <div class="flex justify-end w-auto" >
                                    <div wire:loading.remove wire:target="save" >
                                        <button wire:click="save" class="text-white bg-blue-400 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-400 dark:hover:bg-blue-400 dark:focus:ring-blue-400">
                                            Save
                                        </button>

                                    </div>
                                </div>
                            </div>



                        </div>


                        <div class="grid gap-4 grid-cols-1 sm:grid-cols-3 mx-2 my-2 w-full bg-gray-100">

                            <div  class="m-2 metric-card  dark:bg-gray-900 border @if($this->item == 2) bg-blue-200 border-blue-200 dark:border-blue-800  @else bg-white  border-gray-200 dark:border-gray-800 @endif rounded-lg p-4 max-w-72 w-full" >

                                <div class="flex justify-between items-center w-full">
                                    <div class="flex items-center">
                                        <div wire:loading wire:target="visit(2)" >
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />

                                                </svg>


                                                <p>Please wait...</p>
                                            </div>

                                        </div>
                                        <div wire:loading.remove wire:target="visit(2)">


                                            <div class="flex items-center text-l font-semibold spacing-sm text-slate-600">Revenue User

                                            </div>

                                        </div>

                                    </div>

                                    <div class="flex items-center space-x-5" >

                                        <svg wire:click="visit(2)" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-9 bg-slate-50 rounded-full stroke-slate-400 p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>

                                        <svg wire:click="showDiv"  xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-9 bg-slate-50 rounded-full stroke-slate-400 p-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                        </svg>

                                    </div>

                                </div>



                                <table>

                                    <tr>
                                        <td class="mt-2 text-sm font-semibold   @if($this->item == 2) text-white @else text-slate-400 @endif dark:text-white capitalize  ">Number of User</td>
                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  @if($this->item == 2) text-white @else text-slate-400 @endif  dark:text-white  text-right">

                                            {{App\Models\User::where('id','101')->count()}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="mt-2 text-sm font-semibold   @if($this->item == 2) text-white @else text-slate-400 @endif dark:text-white capitalize  ">Total available id</td>
                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  @if($this->item == 2) text-white @else text-slate-400 @endif  dark:text-white  text-right">

                                            {{number_format(App\Models\User::where('id','101')->sum('id'),2)}} TZS
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="mt-2 text-sm font-semibold   @if($this->item == 2) text-white @else text-slate-400 @endif dark:text-white capitalize  ">Active User</td>
                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  @if($this->item == 2) text-white @else text-slate-400 @endif  dark:text-white  text-right">

                                            {{App\Models\User::where('id','101')->where('id','Active')->count()}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="mt-2 text-sm font-semibold   @if($this->item == 2) text-white @else text-slate-400 @endif dark:text-white capitalize  ">Inactive User</td>
                                        <td class="pl-2 mt-2 text-sm font-semibold spacing-sm  @if($this->item == 2) text-white @else text-slate-400 @endif  dark:text-white text-right">

                                            {{App\Models\User::where('id','101')->where('id','Inactive')->count()}}
                                        </td>
                                    </tr>


                                </table>
                            </div>


                        </div>


                        <div class="grid gap-4 grid-cols-1 sm:grid-cols-3 my-2 w-full">


                        </div>

                    </div>
                </div>


            </div>

            <hr class="boder-b-0 my-4"/>

            <div class="bg-white rounded rounded-lg shadow-sm">



            </div>
        </div>

    </div>

</div>


