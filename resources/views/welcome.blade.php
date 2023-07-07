<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Template | Section</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="flex flex-col min-h-screen bg-[#1f2635] text-white xl:container xl:mx-auto p-6 sm:p-8">
        <!-- Navbar -->
        <div class="columns-2 flex items-center relative">
            <div class="mr-auto">
                <a href="https://www.section.io/?utm_source=sp&utm_campaign=template&utm_medium=organic" target="_blank" rel="nofollow noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="117" height="40"><defs><path id="a" d="M0 39.174h116.87V.437H0z"/></defs><g fill="none" fill-rule="evenodd"><path fill="#00A86B" d="m8.84 27.888 10.95 2.333V9.743L8.84 12.067v15.821zm14.21 6.592L6.215 29.93V10.018l16.81-4.517.024 28.98z"/><path fill="#00A86B" d="M16.145.622 0 6.478v27.024l16.145 5.857V.622zM2.877 31.915V8.067l10.044-3.1v30.047l-10.044-3.1z"/><path fill="#038754" d="m16.145 10.515 1.593-.337V6.922l-1.593.427zm0 22.098 1.593.43v-3.259l-1.593-.34z"/><g fill="#fff" transform="translate(0 .185)"><path d="M39.904 18.07c-3.144-.454-3.753-1.185-3.753-2.646 0-1.386 1.065-2.369 3.119-2.369 2.051 0 3.136.79 3.48 2.625l2.966-.801c-.64-2.874-2.887-4.344-6.446-4.344-3.778 0-6.313 2.217-6.313 5.166 0 3.376 2.053 4.686 6.388 5.266 2.942.479 3.779 1.109 3.779 2.772 0 1.663-1.42 2.772-3.423 2.772-3.068 0-3.804-1.512-4.031-3.326h-.01l-3.125.844c.523 2.953 2.643 5.002 7.166 5.002 4.006 0 6.668-2.445 6.668-5.57 0-3.603-2.206-4.812-6.465-5.392m10.777 2.747c.304-2.042 1.546-3.276 3.397-3.276 1.902 0 3.068 1.008 3.22 3.276h-6.617zm3.397-5.493c-3.777 0-6.592 2.72-6.592 6.803v.202c0 4.158 2.815 6.703 6.719 6.703 3.398 0 5.655-1.513 6.085-4.284h-2.966c-.229 1.285-1.192 2.016-3.044 2.016-2.281 0-3.549-1.412-3.65-3.906h9.71v-.882c0-4.712-2.966-6.652-6.262-6.652zm14.428 11.364c-2.257 0-3.677-1.512-3.677-4.384V22.1c0-2.721 1.496-4.334 3.6-4.334 1.623 0 2.79.731 3.043 2.494h2.967c-.355-3.628-3.12-4.938-6.06-4.938-3.702 0-6.693 2.646-6.693 6.829v.2c0 4.209 2.89 6.679 6.693 6.679 3.6 0 5.908-2.142 6.136-5.166H71.7c-.177 1.865-1.571 2.822-3.194 2.822m10.863-1.864v-6.929h2.916V15.6h-2.916v-4.236l-3.068.83V25.1c0 2.494 1.369 3.905 4.006 3.905.938 0 1.597-.15 2.079-.327v-2.42c-.43.177-.888.253-1.496.253-.963 0-1.521-.53-1.521-1.689"/><mask id="b"><use xlink:href="#a"/></mask><path d="M84.719 28.779h3.068V15.6h-3.068zm15.366-6.502c0 2.696-1.37 4.385-3.652 4.385-2.332 0-3.676-1.689-3.676-4.385v-.201c0-2.721 1.394-4.36 3.676-4.36s3.652 1.664 3.652 4.385v.176zm-3.652-6.954c-3.905 0-6.82 2.72-6.82 6.803v.202c0 4.007 2.89 6.703 6.795 6.703 3.904 0 6.82-2.672 6.82-6.779v-.201c0-4.032-2.916-6.728-6.795-6.728zm15.899 0c-2.18 0-3.651 1.083-4.285 2.368v-2.09h-3.068v13.178h3.068v-7.762c0-2.09 1.394-3.15 3.118-3.15 1.826 0 2.637.907 2.637 2.899v8.013h3.068v-8.29c0-3.63-1.876-5.166-4.538-5.166m-27.613-1.531h3.068v-3.049h-3.068z" mask="url(#b)"/></g></g></svg>
                </a>
            </div>

            <div class="flex sm:mt-1.5">
                <ul class="hidden sm:flex space-x-6 font-semibold border-r border-white/10 pr-6">
                    <li>
                        <a href="https://www.section.io/docs/?utm_source=sp&utm_campaign=template&utm_medium=organic" target="_blank" rel="nofollow noopener">Docs</a>
                    </li>
                    <li>
                        <a href="https://console.section.io/support/?utm_source=sp&utm_campaign=template&utm_medium=organic" target="_blank" rel="nofollow noopener">Support</a>
                    </li>
                </ul>

                <div class="flex items-center">
                    <a href="https://discord.gg/section" target="_blank" rel="nofollow noopener" class="ml-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="w-5 h-5" viewBox="0 0 127.14 96.36"><path d="M107.7 8.07A105.15 105.15 0 0 0 81.47 0a72.06 72.06 0 0 0-3.36 6.83 97.68 97.68 0 0 0-29.11 0A72.37 72.37 0 0 0 45.64 0a105.89 105.89 0 0 0-26.25 8.09C2.79 32.65-1.71 56.6.54 80.21a105.73 105.73 0 0 0 32.17 16.15 77.7 77.7 0 0 0 6.89-11.11 68.42 68.42 0 0 1-10.85-5.18c.91-.66 1.8-1.34 2.66-2a75.57 75.57 0 0 0 64.32 0c.87.71 1.76 1.39 2.66 2a68.68 68.68 0 0 1-10.87 5.19 77 77 0 0 0 6.89 11.1 105.25 105.25 0 0 0 32.19-16.14c2.64-27.38-4.51-51.11-18.9-72.15ZM42.45 65.69C36.18 65.69 31 60 31 53s5-12.74 11.43-12.74S54 46 53.89 53s-5.05 12.69-11.44 12.69Zm42.24 0C78.41 65.69 73.25 60 73.25 53s5-12.74 11.44-12.74S96.23 46 96.12 53s-5.04 12.69-11.43 12.69Z"/></svg>
                    </a>
                    <a href="https://twitter.com/sectionio" target="_blank" rel="nofollow noopener" class="ml-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="w-5 h-5" viewBox="0 0 24 24"><path d="M24 4.557a9.83 9.83 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724 9.864 9.864 0 0 1-3.127 1.195 4.916 4.916 0 0 0-3.594-1.555c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 0 1 1.671 3.149a4.93 4.93 0 0 0 1.523 6.574 4.903 4.903 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 0 1-2.224.084 4.928 4.928 0 0 0 4.6 3.419A9.9 9.9 0 0 1 0 19.54a13.94 13.94 0 0 0 7.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0 0 24 4.557z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main -->
        <div class="flex flex-col flex-1 justify-center items-center min-h-[50%] my-16">
            <div class="w-full max-w-xs">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 651 192"><g fill="#fff" clip-path="url(#clip0)"><path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zm89.059 42.526c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zm128.294-32.503c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zm188.25-75.029h-15.606v100.23h15.606V44.676zm-285.759 100.23h15.607V93.538h26.776V78.182h-42.383v66.724zm177.12-66.724-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zm49.847-1.716c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 0 0-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 0 0-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 0 0-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 0 0 1.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 0 0 1.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 0 0 1.489-2.575V44.666a3.075 3.075 0 0 0-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335 29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 0 0 .004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/></g></svg>
            </div>

            <div class="w-full max-w-fit bg-white/10 text-sm font-mono leading-none overflow-x-auto rounded-md pl-2 py-3 mt-8 lg:mt-10">
                <p class="whitespace-nowrap">
                    Get started by editing <span class="font-semibold mr-2">resources/views/welcome.blade.php</span>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 lg:gap-10">
            <div>
                <p class="leading-7 font-semibold flex items-center mb-2">
                    Go live
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" class="ml-1.5 w-5 h-5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7a15.53 15.53 0 0 1-.311.06 15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
                </p>
                <p class="text-sm leading-6 opacity-70">
                    <a href="https://www.section.io/docs/guides/projects/dns/?utm_source=sp&utm_campaign=template&utm_medium=organic" target="_blank" rel="nofollow noopener" class="underline">Add a custom domain</a>, change your DNS, and take advantage of <a href="https://www.section.io/docs/guides/projects/ssl/?utm_source=sp&utm_campaign=template&utm_medium=organic" target="_blank" rel="nofollow noopener" class="underline">free SSL/TLS certificates</a>.
                </p>
            </div>

            <div>
                <p class="leading-7 font-semibold flex items-center mb-2">
                    Optimize
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" class="ml-1.5 w-5 h-5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75"/></svg>
                </p>
                <p class="text-sm leading-6 opacity-70">
                    <a href="https://www.section.io/pricing?utm_source=sp&utm_campaign=template&utm_medium=organic" target="_blank" rel="nofollow noopener" class="underline">Select the right plan</a> for your RAM and CPU requirements and choose the best global locations.
                </p>
            </div>

            <div>
                <p class="leading-7 font-semibold flex items-center mb-2">
                    Observe
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" class="ml-1.5 w-5 h-5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 0 0 3.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0 1 20.25 6v1.5m0 9V18A2.25 2.25 0 0 1 18 20.25h-1.5m-9 0H6A2.25 2.25 0 0 1 3.75 18v-1.5M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/></svg>
                </p>
                <p class="text-sm leading-6 opacity-70">
                    <a href="https://www.section.io/docs/guides/monitor/?utm_source=sp&utm_campaign=template&utm_medium=organic" target="_blank" rel="nofollow noopener" class="underline">Send telemetry data</a> to your analytics provider for operational consistency and visibility.
                </p>
            </div>

            <div>
                <p class="leading-7 font-semibold flex items-center mb-2">
                    Grow
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" class="ml-1.5 w-5 h-5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.307a11.95 11.95 0 0 1 5.814-5.519l2.74-1.22m0 0-5.94-2.28m5.94 2.28-2.28 5.941"/></svg>
                </p>
                <p class="text-sm leading-6 opacity-70">
                    <a href="https://www.section.io/docs/explanations/kubernetes/?utm_source=sp&utm_campaign=template&utm_medium=organic" target="_blank" rel="nofollow noopener" class="underline">Use Kubernetes resources</a> to deploy additional microservices in your global namespace.
                </p>
            </div>
        </div>
    </body>
</html>