<div  >
    <div class="grid grid-cols-12 grid-rows-3 " >




        <div class="col-span-2 row-span-3 " style="height:90vh;">

            <div class="m-2" >

                <div class="bg-white overflow-hidden shadow-xl " >


                    <div class="min-h-screen flex flex-row bg-gray-100 no-scrollbar overflow-auto" >
                        <div class="flex flex-col w-80 bg-white overflow-hidden">

                            <ul class="flex flex-col py-4 mr-7 ml-1" id="menu">


                                <li class="">
                                    <a style="cursor: pointer" wire:click="showDashboard" class="@if( $tab_id == 1 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                       data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                        <div wire:loading wire:target="showDashboard">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                        <div wire:loading.remove wire:target="showDashboard">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 1 ) text-blue-600 @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                </svg>
                                            </span>
                                        </div>

                                        <p class="text-sm font-medium @if( $tab_id == 1 ) text-blue-600 font-semibold @else text-gray-600 @endif ">Reconciliation Status</p>
                                        @if( $tab_id == 1 )
                                            <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 1 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                        @endif

                                    </a>
                                </li>



                                <li class="">
                                    <a style="cursor: pointer" wire:click="showMembers" class="@if( $tab_id == 3 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                       data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                        <div wire:loading wire:target="showMembers">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                        <div wire:loading.remove wire:target="showMembers">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 3 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </span>
                                        </div>

                                        <p class="text-sm font-medium @if( $tab_id == 3 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Services Manager</p>
                                        @if( $tab_id == 3 )
                                            <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 3 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                        @endif

                                    </a>
                                </li>

                                <li class="">
                                    <a style="cursor: pointer" wire:click="showBranches" class="@if( $tab_id == 2 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                       data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">

                                        <div wire:loading wire:target="showBranches">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>

                                        <div wire:loading.remove wire:target="showBranches">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 2 ) text-blue-400 font-semibold  @else text-gray-400 @endif ">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                                </svg>
                                            </span>



                                        </div>

                                        <p class="text-sm font-medium @if( $tab_id == 2 ) text-blue-400 font-semibold  @else text-gray-600 @endif ">Internal Nodes</p>

                                        @if( $tab_id == 2 )
                                            <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 2 ) text-blue-400 font-semibold @else text-gray-400 @endif">
                                                <i style="font-size: 1.6em;" class='bx bx-chevron-right'></i>
                                            </span>
                                        @endif

                                    </a>
                                </li>

                                <li class="">
                                    <a style="cursor: pointer" wire:click="showThirdPartiesNodes" class="@if( $tab_id == 5 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                       data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                        <div wire:loading wire:target="showThirdPartiesNodes">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                        <div wire:loading.remove wire:target="showThirdPartiesNodes">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 5 ) text-blue-400 font-semibold @else text-gray-400 @endif ">

                                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 stroke-gray-400" width="24" height="24" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" ><path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path></svg>
                                            </span>
                                        </div>

                                        <p class="text-sm font-medium @if( $tab_id == 5 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Third Parties Nodes</p>
                                        @if( $tab_id == 5 )
                                            <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 5 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                        @endif

                                    </a>
                                </li>

                                <li class="">
                                    <a style="cursor: pointer" wire:click="showSavings" class="@if( $tab_id == 6 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                       data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                        <div wire:loading wire:target="showSavings">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                        <div wire:loading.remove wire:target="showSavings">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 6 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                                                </svg>
                                            </span>
                                        </div>

                                        <p class="text-sm font-medium @if( $tab_id == 6 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Clients Nodes</p>
                                        @if( $tab_id == 6 )
                                            <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 6 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                        @endif

                                    </a>
                                </li>

                                @if(in_array(1, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showDashboard" class="@if( $tab_id == 1 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showDashboard">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showDashboard">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 1 ) text-blue-600 @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 1 ) text-blue-600 font-semibold @else text-gray-600 @endif ">Dashboard</p>
                                            @if( $tab_id == 1 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 1 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(2, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showBranches" class="@if( $tab_id == 2 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">

                                            <div wire:loading wire:target="showBranches">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>

                                            <div wire:loading.remove wire:target="showBranches">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 2 ) text-blue-400 font-semibold  @else text-gray-400 @endif ">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                                </svg>
                                            </span>



                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 2 ) text-blue-400 font-semibold  @else text-gray-600 @endif ">Branches</p>

                                            @if( $tab_id == 2 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 2 ) text-blue-400 font-semibold @else text-gray-400 @endif">
                                                <i style="font-size: 1.6em;" class='bx bx-chevron-right'></i>
                                            </span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(3, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showMembers" class="@if( $tab_id == 3 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showMembers">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showMembers">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 3 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 3 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Members</p>
                                            @if( $tab_id == 3 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 3 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(4, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showShares" class="@if( $tab_id == 5 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showShares">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showShares">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 5 ) text-blue-400 font-semibold @else text-gray-400 @endif ">

                                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 stroke-gray-400" width="24" height="24" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" ><path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path></svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 5 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Shares</p>
                                            @if( $tab_id == 5 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 5 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(5, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showSavings" class="@if( $tab_id == 6 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showSavings">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showSavings">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 6 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 6 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Savings</p>
                                            @if( $tab_id == 6 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 6 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(6, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showDeposits" class="@if( $tab_id == 7 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showDeposits">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showDeposits">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 7 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 16v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-7a2 2 0 012-2h2m3-4H9a2 2 0 00-2 2v7a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-1m-1 4l-3 3m0 0l-3-3m3 3V3" />
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 7 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Deposits</p>
                                            @if( $tab_id == 7 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 7 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(7, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showLoans" class="@if( $tab_id == 9 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showLoans">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showLoans">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 9 ) text-blue-400 font-semibold @else text-gray-400 @endif ">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 9 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Loans</p>
                                            @if( $tab_id == 9 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 9 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif


                                @if(in_array(8, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showAccounting" class="@if( $tab_id == 8 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showAccounting">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showAccounting">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 8 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2  @if( $tab_id == 8 ) stroke-blue-400 font-semibold @else stroke-gray-400 @endif " fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" width="24" height="24" ><path d="M19 2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2zm0 14H5V5c0-.806.55-.988 1-1h13v12z"></path></svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 8 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Accounting</p>
                                            @if( $tab_id == 8 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 8 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif


                                @if(in_array(9, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showProductsManagement" class="@if( $tab_id == 4 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showProductsManagement">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showProductsManagement">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 4 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 4 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Products Management</p>
                                            @if( $tab_id == 4 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 4 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(10, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showPayments" class="@if( $tab_id == 10 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showPayments">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showPayments">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 10 ) text-blue-400 font-semibold @else text-gray-400 @endif ">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 @if( $tab_id == 10 ) stroke-blue-400 @else stroke-gray-400 @endif " fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path d="M21 4H3a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-1 11a3 3 0 0 0-3 3H7a3 3 0 0 0-3-3V9a3 3 0 0 0 3-3h10a3 3 0 0 0 3 3v6z">

                                                    </path>
                                                    <path d="M12 8c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z">

                                                    </path>
                                                </svg>

                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 10 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Payments</p>
                                            @if( $tab_id == 10 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 10 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(11, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="showReconciliation" class="@if( $tab_id == 11 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="showReconciliation">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="showReconciliation">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 11 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 @if( $tab_id == 11 ) stroke-blue-400 @else stroke-gray-400 @endif " fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V5h7v14H4zm9 0V5h7l.001 14H13z">

                                                    </path>
                                                    <path d="M15 7h3v2h-3zm0 4h3v2h-3z"></path>
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 11 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Reconciliation</p>
                                            @if( $tab_id == 11 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 11 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(12, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="setup" class="@if( $tab_id == 12 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="setup">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="setup">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 12 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 @if( $tab_id == 12 ) stroke-blue-400 @else stroke-gray-400 @endif " fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V5h7v14H4zm9 0V5h7l.001 14H13z">

                                                    </path>
                                                    <path d="M15 7h3v2h-3zm0 4h3v2h-3z"></path>
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 12 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Setup</p>
                                            @if( $tab_id == 12 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 12 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif


                                @if(in_array(13, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="settings" class="@if( $tab_id == 13 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="settings">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="settings">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 13 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 @if( $tab_id == 13 ) stroke-blue-400 @else stroke-gray-400 @endif " fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V5h7v14H4zm9 0V5h7l.001 14H13z">

                                                    </path>
                                                    <path d="M15 7h3v2h-3zm0 4h3v2h-3z"></path>
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 13 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Settings</p>
                                            @if( $tab_id == 13 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 13 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif

                                @if(in_array(13, $this->modules))
                                    <li class="">
                                        <a style="cursor: pointer" wire:click="approvals" class="@if( $tab_id == 14 ) active @endif
                                      flex flex-row items-center h-12 transform hover:translate-x-2
                                                     transition-transform ease-in duration-200  hover:text-gray-800 ease-in-out
                                                        text-ellipsis whitespace-nowrap rounded"
                                           data-mdb-ripple="true" data-mdb-ripple-color="primary" wire:loading.attr="disabled">
                                            <div wire:loading wire:target="approvals">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin  h-5 w-5 mr-2 stroke-gray-400" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div wire:loading.remove wire:target="approvals">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg @if( $tab_id == 14 ) text-blue-400 font-semibold @else text-gray-400 @endif ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 @if( $tab_id == 14 ) stroke-blue-400 @else stroke-gray-400 @endif " fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V5h7v14H4zm9 0V5h7l.001 14H13z">

                                                    </path>
                                                    <path d="M15 7h3v2h-3zm0 4h3v2h-3z"></path>
                                                </svg>
                                            </span>
                                            </div>

                                            <p class="text-sm font-medium @if( $tab_id == 14 ) text-blue-400 font-semibold @else text-gray-600 @endif ">Approvals</p>
                                            @if( $tab_id == 14 )
                                                <span class="inline-flex items-center justify-center h-24 w-24 text-lg @if( $tab_id == 14 ) text-blue-400 font-semibold @else text-gray-400 @endif"><i style="font-size: 1.6em;" class='bx bx-chevron-right'></i></span>
                                            @endif

                                        </a>
                                    </li>
                                @endif


                            </ul>

                        </div>
                    </div>



                </div>



            </div>


        </div>



        <div class="col-span-10 row-span-3 "  style="height:90vh;">

            <div class="mt-2" >

                @if($this->tab_id == 1 )
                    <div class="bg-white mr-2" >
                        <livewire:main.status.status/>
                    </div>
                @else
                    <div class="bg-white mr-2" >

                        @if($this->tab_id == 2 )
                            <livewire:main.branches.branches/>
                        @endif
                        @if($this->tab_id == 3 )
                            <livewire:main.members.members/>
                        @endif
                        @if($this->tab_id == 4 )
                            <livewire:main.products-management.product-management/>
                        @endif
                        @if($this->tab_id == 5 )
                            <livewire:main.nodes.third-parties-nodes/>
                        @endif
                        @if($this->tab_id == 6 )
                            <livewire:main.savings.savings/>
                        @endif
                        @if($this->tab_id == 7 )
                            <livewire:main.deposits.deposits/>
                        @endif
                        @if($this->tab_id == 8 )
                            <livewire:main.accounting.accounting/>
                        @endif
                        @if($this->tab_id == 9 )
                            <livewire:main.loans.loans/>
                        @endif
                        @if($this->tab_id == 10 )
                            <livewire:main.payments.payments/>
                        @endif
                        @if($this->tab_id == 11 )
                            <livewire:main.reconciliation.reconciliation/>
                        @endif
                        @if($this->tab_id == 12 )
                            <livewire:main.setup.setup/>
                        @endif
                        @if($this->tab_id == 13 )
                            <livewire:main.settings.settings/>
                        @endif
                        @if($this->tab_id == 14 )
                            <livewire:main.approvals.approvals/>
                        @endif

                    </div>

                @endif


            </div>

        </div>


    </div>

</div>
