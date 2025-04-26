<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitter Timeline</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen p-6">

    <h1 class="text-3xl font-bold mb-6">Twitter Timeline: Superman 🦸‍♂️</h1>

    <div class="space-y-4">
        @foreach ($tweets['timeline'] as $tweet)
            <div class="bg-white shadow-md rounded-lg p-4 flex space-x-4">
                <img src="{{ $tweet['user_info']['profile_image_url'] }}" alt="Profile" class="w-12 h-12 rounded-full">
                <div>
                    <div class="flex items-center space-x-2">
                        <h2 class="font-semibold">{{ $tweet['user_info']['name'] }}</h2>
                        <span class="text-gray-500 text-sm">@{{ $tweet['screen_name'] }}</span>
                    </div>
                    <p class="mt-2">{{ $tweet['text'] }}</p>
                    <div class="text-sm text-gray-400 mt-2">
                        {{ \Carbon\Carbon::parse($tweet['created_at'])->diffForHumans() }}
                    </div>
                    <div class="flex space-x-4 text-sm text-gray-600 mt-2">
                        <span>❤️ {{ $tweet['favorites'] }}</span>
                        <span>🔁 {{ $tweet['retweets'] }}</span>
                        <span>💬 {{ $tweet['replies'] }}</span>
                        <span>👀 {{ $tweet['views'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>
