<script src="https://cdn.tailwindcss.com"></script>


<script>

    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    primary: {
                        "50": "#eff6ff",
                        "100": "#dbeafe",
                        "200": "#bfdbfe",
                        "300": "#93c5fd",
                        "400": "#60a5fa",
                        "500": "#3b82f6",
                        "600": "#2563eb",
                        "700": "#1d4ed8",
                        "800": "#1e40af",
                        "900": "#1e3a8a",
                        "950": "#172554"
                    }
                }
            },
            fontFamily: {
                'body': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ],
                'sans': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ]
            }
        }
    }


</script>

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-8 h-8 mr-2" src="{{asset('/images/cybermarket_logo.png')}}" alt="logo">
            Cybermarket
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Criar Conta
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('registerSave') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm
                        rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700
                        dark:border-gray-600 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="O teu nome"
                               >
                        @error('name')
                        <spa>{{ $message }}</spa><br>
                        @enderror
                    </div>
                    <div>
                        <label for="email"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm
                        rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700
                        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                        dark:focus:border-blue-500" placeholder="nome@dominio.com">


                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border
                        border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block
                        w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                        dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <label for="confirm_password"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar
                            password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600
                               focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        @error('confirm_password')
                        <spa>{{ $message }}</spa><br>
                        @enderror
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50
                            focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600
                             dark:ring-offset-gray-800" required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">Aceito os <a class="font-medium
                            text-primary-600 hover:underline dark:text-primary-500" href="#">Termos e
                                    Condições</a></label>
                        </div>
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none
                    focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600
                    dark:hover:bg-primary-700 dark:focus:ring-primary-800">Criar conta
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Já tens uma conta? <a href="/login"
                                              class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
