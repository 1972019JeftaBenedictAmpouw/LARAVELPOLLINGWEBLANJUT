<title>GALA STOCK | HOME</title>
<link rel="stylesheet" href="style_adm.css">
<link rel="icon" type="image/x-icon" href="/img/LOGO.png">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('GALA INVENTORY') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="background-color: darkorange;">
                    <div class="home">
                        <center>
                            <table>
                                <tr>
                                    <td> <a class="buttonstock" href="dailystock" style="margin: 10px;"><img class="button-add" src="img/DAILYSTOCK.png"></img></a></td>

                                    <td> <a class="buttonstock" href="stockin" style="margin: 10px;"><img class="button-add" src="img/STOCKIN.png"></img></a></td>

                                    <td> <a class="buttonstock" href="stocktable" style="margin: 10px;"><img class="button-add" src="img/STOCKTABLE.png"></img></a></td>

                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>