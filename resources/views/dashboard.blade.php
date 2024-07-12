<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSIAS Cinema Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        /* Custom styles */
        .sidebar {
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .sidebar a {
            color: #e5e7eb; /* Light gray */
            transition: all 0.3s ease;
        }
        .sidebar a:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1); /* Light hover effect */
        }
        .sidebar img {
            border: 2px solid #fff;
        }
        .form-container {
            background-color: #1f2937; /* Dark gray */
            color: #fff;
            transition: all 0.3s ease;
            border-radius: 20px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .form-container input,
        .form-container textarea {
            background-color: #374151; /* Darker gray for inputs */
            color: #fff;
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .form-container input:focus,
        .form-container textarea:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.5); /* Blue focus effect */
        }
        .form-container button {
            background-color: #06b6d4; /* Teal */
            color: #fff;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .form-container button:hover {
            background-color: #3b82f6; /* Blue */
            transform: translateY(-2px); /* Lift effect */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
        .hover-shadow:hover {
            box-shadow: 0 4px 14px 0 rgba(0, 0, 0, 0.25);
        }
        .rounded-full {
            border-radius: 50%;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex">
    <!-- Sidebar -->
    <div class="w-1/5 sidebar flex flex-col justify-between p-6 shadow-lg min-h-screen">
        <div>
            <h1 class="text-3xl font-bold text-center text-white mb-12">ENSIAS Cinema</h1>
            <nav>
                <ul class="space-y-6">
                    <li>
                        <a href="{{route('movies.add_movie')}} " class="block text-center py-3 rounded hover:bg-gray-700">Add Movie</a>
                    </li>
                    <li>
                        <a href="  {{route('movies.delete_movie')}} " class="block text-center py-3 rounded hover:bg-gray-700">Delete Movie</a>
                    </li>
                    <li>
                        <a href="{{route('movies.announcement')}} " class="block text-center py-3 rounded hover:bg-gray-700">Announcements</a>
                    </li>
                    
                </ul>
            </nav>
        </div>
        <div>
            <h2 class="text-xl font-semibold text-white mb-4">Admins</h2>
            <div class="flex items-center space-x-4 mb-4">
                <img src="https://via.placeholder.com/40" alt="Admin 1" class="rounded-full shadow-lg">
                <span class="text-white">Admin 1</span>
            </div>
            <div class="flex items-center space-x-4">
                <img src="https://via.placeholder.com/40" alt="Admin 2" class="rounded-full shadow-lg">
                <span class="text-white">Admin 2</span>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="w-4/5 p-10 flex items-center justify-center">
        <div class="w-full max-w-3xl p-10 form-container">
            <h1 class="text-4xl font-bold mb-8 text-center">Add Movie</h1>
            <form action="#" method="POST">
                <div class="mb-6">
                    <label class="block text-lg mb-2" for="name">Movie Name</label>
                    <input class="w-full p-4 rounded focus:ring focus:ring-blue-500" type="text" id="name" name="name" required>
                </div>
                <div class="mb-6">
                    <label class="block text-lg mb-2" for="story">Movie Story</label>
                    <textarea class="w-full p-4 rounded focus:ring focus:ring-blue-500" id="story" name="story" rows="4" required></textarea>
                </div>
                <div class="mb-6">
                    <label class="block text-lg mb-2" for="days">Projection Days</label>
                    <input class="w-full p-4 rounded focus:ring focus:ring-blue-500" type="text" id="days" name="days" placeholder="e.g., Monday, Wednesday, Friday" required>
                </div>
                <div class="mb-6">
                    <label class="block text-lg mb-2" for="trailer">Bande-Annonce</label>
                    <input class="w-full p-4 rounded focus:ring focus:ring-blue-500" type="url" id="trailer" name="trailer" placeholder="Trailer URL" required>
                </div>
                <div class="mb-6">
                    <label class="block text-lg mb-2" for="salles">Projection Salles</label>
                    <input class="w-full p-4 rounded focus:ring focus:ring-blue-500" type="text" id="salles" name="salles" placeholder="e.g., Salle 1, Salle 2" required>
                </div>
                <div class="text-center">
                    <button class="w-full py-4 rounded transition duration-300 hover:bg-blue-600 hover-shadow" type="submit">Add Movie</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>