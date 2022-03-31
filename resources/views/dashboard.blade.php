@extends('layouts.app')

@section('content')


<section class="w-full p-4">
    <div class="w-full h-64 border-dashed border-4 p-4 text-md">
        <div class="flex mb-4">
            <h1>Hey</h1>
            <div class="w-3/4">
                <strong>&nbsp;{{ auth()->user()->name }} !</strong>
            </div>
            <div class="w-1/4 h-12">
                <div class="inline-flex rounded-md shadow-sm relative" role="group">
                    <button id="addTaskModal" type="button"
                        class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:text-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600  dark:focus:text-white">
                        <a>Add&nbsp;Task</a>
                    </button>
                    <button id="addMeetingModal" type="button"
                        class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:text-white">
                        <a>Add&nbsp;Metting</a>
                    </button>
                    <!-- drop down test -->
                    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                    <div class="inline-flex rounded-md shadow-sm relative" role="group">
                        <div x-data="{ dropdownOpen: false }" class="relative ">
                            <button @click="dropdownOpen = !dropdownOpen"
                                class="py-2 px-4 rounded-r-md text-sm font-medium text-gray-900 bg-white rounded-r-rg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:text-blue-400 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600  dark:focus:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                class="fixed inset-0 h-full w-full z-10"></div>
                            <div x-show="dropdownOpen"
                                class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                                <a href="add-taks"
                                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Follow up
                                </a>
                                <a href="add-taks"
                                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Call reminder
                                </a>
                                <a href="add-taskm"
                                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Meeting
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>




<!-- ADD TASK START -->

<div id="addTaskModelMain"
    class="fixed top-0 left-0 w-screen h-full flex items-center justify-center bg-gray-500 bg-opacity-50 transform scale-0 transition-transform duration-300">
    <aside style="width:800px;"
        class="transform bg-white top-0 right-0 shadow-3xl fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30"
        :class="isOpen ? 'translate-x-0' : '-translate-x-full'">
        <div class="flex border-b border-gray-300">
            <div class="xl:w-3/4">
                <h1 style="color: #354E57;" class="xl:text-sm xl:mt-5 xl:mb-5 xl:pl-8 xl:font-bold text-3xl  font-bold">
                    ADD TASK</h1>
            </div>
            <div class="xl:w-1/4 text-right p-5">
                <button id="addTaskCloseButton" type="button" class="focus:outline-none text-right">
                    <svg class="w-4 h-4 xl:mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <form action='add-task' method="post">
            @csrf
            <div class="flex h-5/6">
                <div class="xl:w-3/5 border-r border-gray-200 ">

                    <!-- <div id="markCompleted" class="ml-7 mr-7 mt-5">
                    <div class="xl:px-7 xl:py-4">
                        <input type="checkbox" name="markAsCompleted"  id="reveal-email" class="" style="border-color:#cfd7df;">
                        <label for="reveal-email" class="text-gray-600 text-sm"> Mark as completed</label>
                        <div id="email">
                            <div class="flex pt-5">
                                <div class="xl:w-1/2 pr-1">
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Completed date</label> -->

                    <input hidden value="{{Carbon\Carbon::now()->format('Y-m-d')}}"
                        class="border w-full py-2 px-1 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                        name="completedDate" type="date">
                    <!-- </div>
                                <div class="xl:w-1/2 pl-1"> -->
                    <input hidden value="{{Carbon\Carbon::now()->format('H:i')}}"
                        class="mt-7 border w-full py-2 px-3 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                        name="completedTime" type="time">
                    <!-- </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                    <div class="pl-7 pr-7 pt-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Title <span
                                class="text-red-500">*</span></label>
                        <input class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight 
					focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300" name="title" type="text"
                            placeholder="Enter title of task">
                    </div>
                    <div class="pl-7 pr-7 pt-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Description</label>
                        <textarea
                            class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black"
                            name="description" rows="3"
                            placeholder="Start typing the details about the task..."></textarea>
                    </div>

                    <div class="flex pl-7 pr-7 pt-3">
                        <div class="xl:w-1/3 pr-1">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Task type</label>
                            <select name="taskType" id="" placeholder="Select a type"
                                class="text-sm border w-full py-2 px-3 text-gray-700 leading-tight ">
                                <option value="" disabled selected class="text-sm text-gray-700">Select a type</option>
                                <option value="followUp" class="text-sm">Follow up</option>
                                <option value="callReminder" class="text-sm">Call reminder</option>
                            </select>
                        </div>
                        <div class="xl:w-1/3 pr-1 pl-1">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Due date <span
                                    class="text-red-500">*</span></label>
                            <input value="{{Carbon\Carbon::now()->format('Y-m-d')}}"
                                class="border w-full py-2 px-1 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                                name="dueDate" type="date">
                        </div>
                        <div class="xl:w-1/3 pl-1">
                            <input value="{{Carbon\Carbon::now()->format('H:i')}}"
                                class="mt-7 border w-full py-2 px-3 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                                name="dueTime" type="time">
                        </div>
                    </div>

                    <div class="pl-7 pr-7 pt-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Outcome</label>
                        <select name="outCome" id=""
                            class="text-sm border w-full py-2 px-3 text-gray-700 leading-tight ">
                            <option value="" disabled selected class="text-sm text-gray-700">Select an outcome</option>
                            <option value="interested" class="text-sm">Interested</option>
                            <option value="leftMessage" class="text-sm">Left message</option>
                            <option value="noResponse" class="text-sm">No response</option>
                            <option value="notInterested" class="text-sm">Not interested</option>
                            <option value="notAbletoReach" class="text-sm">Not able to reach</option>
                        </select>
                    </div>

                </div>
                <div class="xl:w-2/5 h-96">
                    <div class="pl-4 pr-5 pt-5">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Owner</label>
						<select name="owner" id="" class="text-sm border w-full py-2 px-3 text-gray-700 leading-tight ">
                        @foreach ($user as $users )
                            <option value="{{ $users->id }}" class="text-sm">{{ $users->name }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="pl-4 pr-5 pt-5">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Related to</label>
                        <input
                            class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                            name="relatedTo" type="text" placeholder="Link this task">
                    </div>
                    <div class="pl-4 pr-5 pt-5">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Collaborators</label>
                        <input
                            class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                            name="collaborators" type="text">
                    </div>
                </div>
            </div>

            <!-- footer -->

            <div class="fixed bottom-0 left-0 w-full text-center border-t-2 border-gray-300 p-4 bg-white">
                <div class="flex ">
                    <div class="xl:w-full text-right">
                        <div class="inline-flex" role="group">
                            <button id="addTaskCloseButton2"
                                class="border rounded-md border-gray-300 bg-white text-sm font-bold px-6 py-2 text-gray-900 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-red-700 focus:text-red-700 inline-flex items-center ">
                                Cancel
                            </button>
                            <button type="submit"
                                class="bg-gradient-to-b from-red-400 to-red-600 ml-6 mr-20 rounded-md border-t border-b border-gray-200 bg-white text-sm font-bold px-7 py-3 text-white focus:z-10 inline-flex items-center">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </aside>
</div>

<!-- END TASK -->




<!-- Add Meeting model -->


<div id="addMeetingModelMain"
    class="fixed top-0 left-0 w-screen h-full flex items-center justify-center bg-gray-500 bg-opacity-50 transform scale-0 transition-transform duration-300">
    <aside style="width:800px;"
        class="transform bg-white top-0 right-0 shadow-3xl fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30"
        :class="isOpen ? 'translate-x-0' : '-translate-x-full'">
        <div class="flex border-b border-gray-300">
            <div class="xl:w-3/4">
                <h1 style="color: #354E57;" class="xl:text-sm xl:mt-5 xl:mb-5 xl:pl-8 xl:font-bold text-3xl  font-bold">
                    ADD MEETING</h1>
            </div>
            <div class="xl:w-1/4 text-right">
                <button id="addMeetingCloseButton" type="button" class="focus:outline-none xl:mt-5 xl:mb-5">
                    <svg class="w-4 h-4 xl:mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <form action="add-meeting" method="post">
            @csrf
            <div class="flex h-5/6">
                <div class="xl:w-3/5 border-r border-gray-200 ">

                    <div class="pl-7 pr-7 pt-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Title <span
                                class="text-red-500">*</span></label>
                        <input
                            class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                            name="title" type="text" placeholder="Enter title of task">
                    </div>

                    <div class="flex pl-7 pr-7 pt-3">
                        <div class="xl:w-1/2  pr-1">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="username">From <span
                                    class="text-red-500">*</span></label>

                            <div class="flex">
                                <div class="w-3/5 pr-1">
                                    <input value="{{Carbon\Carbon::now()->format('Y-m-d')}}"
                                        class=" border w-full py-2 px-1 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                                        name="dateFrom" type="date">
                                </div>
                                <div class="w-2/5 pl-1">
                                    <input value="{{Carbon\Carbon::now()->format('H:i')}}"
                                        class=" border w-full py-2 px-1 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                                        name="timeFrom" type="time">
                                </div>
                            </div>

                        </div>
                        <div class="xl:w-1/2 pr-1 pl-1">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="username">To <span
                                    class="text-red-500">*</span></label>
                            <div class="flex">
                                <div class="w-3/5 pr-1">
                                    <input value="{{Carbon\Carbon::now()->format('Y-m-d')}}"
                                        class=" border w-full py-2 px-1 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                                        name="dateTo" type="date">
                                </div>
                                <div class="w-2/5 pl-1">
                                    <input value="{{Carbon\Carbon::now()->format('H:i')}}"
                                        class=" border w-full py-2 px-1 text-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                                        name="timeTo" type="time">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pl-7 pr-7 pt-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Time zone</label>

                        <select name="timeZone" id="time_zone"
                            class="span5 text-sm border w-full py-2 px-3 text-gray-700 leading-tight">
                            <option value="-12:00" class="text-sm">(GMT -12:00) Eniwetok, Kwajalein</option>
                            <option value="-11:00" class="text-sm">(GMT -11:00) Midway Island, Samoa</option>
                            <option value="-10:00" class="text-sm">(GMT -10:00) Hawaii</option>
                            <option value="-09:50" class="text-sm">(GMT -9:30) Taiohae</option>
                            <option value="-09:00" class="text-sm">(GMT -9:00) Alaska</option>
                            <option value="-08:00" class="text-sm">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                            <option value="-07:00" class="text-sm">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                            <option value="-06:00" class="text-sm">(GMT -6:00) Central Time (US &amp; Canada), Mexico
                                City</option>
                            <option value="-05:00" class="text-sm">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota,
                                Lima</option>
                            <option value="-04:50" class="text-sm">(GMT -4:30) Caracas</option>
                            <option value="-04:00" class="text-sm">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz
                            </option>
                            <option value="-03:50" class="text-sm">(GMT -3:30) Newfoundland</option>
                            <option value="-03:00" class="text-sm">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                            <option value="-02:00" class="text-sm">(GMT -2:00) Mid-Atlantic</option>
                            <option value="-01:00" class="text-sm">(GMT -1:00) Azores, Cape Verde Islands</option>
                            <option value="+00:00" selected="selected" class="text-sm">(GMT) Western Europe Time,
                                London, Lisbon, Casablanca</option>
                            <option value="+01:00" class="text-sm">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris
                            </option>
                            <option value="+02:00" class="text-sm">(GMT +2:00) Kaliningrad, South Africa</option>
                            <option value="+03:00" class="text-sm">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg
                            </option>
                            <option value="+03:50" class="text-sm">(GMT +3:30) Tehran</option>
                            <option value="+04:00" class="text-sm">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                            <option value="+04:50" class="text-sm">(GMT +4:30) Kabul</option>
                            <option value="+05:00" class="text-sm">(GMT +5:00) Ekaterinburg, Islamabad, Karachi,
                                Tashkent</option>
                            <option value="+05:50" class="text-sm">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi
                            </option>
                            <option value="+05:75" class="text-sm">(GMT +5:45) Kathmandu, Pokhara</option>
                            <option value="+06:00" class="text-sm">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                            <option value="+06:50" class="text-sm">(GMT +6:30) Yangon, Mandalay</option>
                            <option value="+07:00" class="text-sm">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                            <option value="+08:00" class="text-sm">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong
                            </option>
                            <option value="+08:75" class="text-sm">(GMT +8:45) Eucla</option>
                            <option value="+09:00" class="text-sm">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk
                            </option>
                            <option value="+09:50" class="text-sm">(GMT +9:30) Adelaide, Darwin</option>
                            <option value="+10:00" class="text-sm">(GMT +10:00) Eastern Australia, Guam, Vladivostok
                            </option>
                            <option value="+10:50" class="text-sm">(GMT +10:30) Lord Howe Island</option>
                            <option value="+11:00" class="text-sm">(GMT +11:00) Magadan, Solomon Islands, New Caledonia
                            </option>
                            <option value="+11:50" class="text-sm">(GMT +11:30) Norfolk Island</option>
                            <option value="+12:00" class="text-sm">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka
                            </option>
                            <option value="+12:75" class="text-sm">(GMT +12:45) Chatham Islands</option>
                            <option value="+13:00" class="text-sm">(GMT +13:00) Apia, Nukualofa</option>
                            <option value="+14:00" class="text-sm">(GMT +14:00) Line Islands, Tokelau</option>
                        </select>

                    </div>

                    <div class="pl-7 pr-7 pt-3 dropdown">
                        <button href="dashboard"
                            class="flex pl-3 text-sm py-2 px-3 rounded-md border bg-gradient-to-b from-white to-gray-100">
                            Add video conferencing
							<!-- <img class="logo" src="https://zoom.us/docs/aboutAssets/img/ZoomLogo.png" alt="Zoom Logo"> -->
                            <svg class="w-4 h-4 mt-1 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							src="https://zoom.us/docs/aboutAssets/img/ZoomLogo.png">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul class="dropdown-menu absolute border  hidden shadow text-gray-700 pt-1 ">
                            <li class="flex-1">
                                <a class="py-2 px-2 flex block text-sm whitespace-no-wrap bg-white" href="connectZoom">
                                    <!-- <svg class="w-6 h-6 " style="color:#bbdcfe;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>     -->
                                    <span class="ml-2 pb-1 md:pb-0 text-xs md:text-sm">Connect Zoom </span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="pl-7 pr-7 pt-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Location </label>
                        <input
                            class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                            name="location" type="text" placeholder="Enter location of meeting">
                    </div>


                    <div class="pl-7 pr-7 pt-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Description</label>
                        <textarea
                            class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black"
                            name="description" rows="3"
                            placeholder="Start typing the details about the task..."></textarea>
                    </div>

                    <div class="pl-7 pr-7 pt-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Outcome</label>
                        <select name="outCome" id=""
                            class="text-sm border w-full py-2 px-3 text-gray-700 leading-tight ">
                            <option value="" disabled selected class="text-sm text-gray-700">Select an outcome</option>
                            <option value="interested" class="text-sm">Interested</option>
                            <option value="leftMessage" class="text-sm">Left message</option>
                            <option value="noResponse" class="text-sm">No response</option>
                            <option value="notInterested" class="text-sm">Not interested</option>
                            <option value="notAbletoReach" class="text-sm">Not able to reach</option>
                        </select>
                    </div>

                    <div class="pl-7 pr-7 pt-3">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Meeting notes</label>
                        <textarea
                            class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black"
                            name="meetingNotes" rows="3"
                            placeholder="Start typing the details about the task..."></textarea>
                    </div>

                </div>
                <div class="xl:w-2/5 h-96">
                    <div class="pl-4 pr-5 pt-5">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Related to</label>
                        <input
                            class="appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-sm placeholder:text-gray-300"
                            name="relatedTo" type="text" placeholder="Link this task">
                    </div>

                    <div class="pl-4 pr-5 pt-5">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="username">Attendees </label>
						<select name="attendees" id="" class="text-sm border w-full py-2 px-3 text-gray-700 leading-tight ">
                        @foreach ($user as $users )
                            <option value="{{ $users->id }}" class="text-sm">{{ $users->name }}</option>
                        @endforeach
                    </select>
                         </div>

                    </div>
                </div>

                <!-- footer -->

                <div class="fixed mt-10 w-full text-center border-t-2 border-gray-300 p-4 bg-white">
                    <div class="flex ">
                        <div class="xl:w-full text-right">
                            <div class="inline-flex" role="group">
                                <button id="addMeetingCloseButton2"
                                    class="border rounded-md border-gray-300 bg-white text-sm font-bold px-6 py-2 text-gray-900 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-red-700 focus:text-red-700 inline-flex items-center ">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="bg-gradient-to-b from-red-400 to-red-600 ml-6 mr-20 rounded-md border-t border-b border-gray-200 bg-white text-sm font-bold px-7 py-3 text-white focus:z-10 inline-flex items-center">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

        </form>
    </aside>
</div>

<!-- END Meeting -->

<script>
const button = document.getElementById('addTaskModal')
const closebutton = document.getElementById('addTaskCloseButton')
const closebutton2 = document.getElementById('addTaskCloseButton2')
const modal = document.getElementById('addTaskModelMain')

button.addEventListener('click', () => modal.classList.add('scale-100'))
closebutton.addEventListener('click', () => modal.classList.remove('scale-100'))
closebutton2.addEventListener('click', () => modal.classList.remove('scale-100'))


const Meetingbutton = document.getElementById('addMeetingModal')
const Meetingclosebutton = document.getElementById('addMeetingCloseButton')
const Meetingclosebutton2 = document.getElementById('addMeetingCloseButton2')
const Meetingmodal = document.getElementById('addMeetingModelMain')

Meetingbutton.addEventListener('click', () => Meetingmodal.classList.add('scale-100'))
Meetingclosebutton.addEventListener('click', () => Meetingmodal.classList.remove('scale-100'))
Meetingclosebutton2.addEventListener('click', () => Meetingmodal.classList.remove('scale-100'))
</script>


@endsection