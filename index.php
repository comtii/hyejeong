<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎈 컴티샘의 정보교실</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- 나눔스퀘어라운드 웹폰트 -->
    <link rel="stylesheet" href="https://hangeul.pstatic.com/hangeul_static/css/nanum-square-round.css">
    <style>
        body {
            font-family: 'NanumSquareRound', sans-serif;
        }
    </style>
</head>
<body class="bg-orange-50/60 text-gray-800 min-h-screen flex flex-col justify-between selection:bg-orange-400 selection:text-white">

    <!-- 상단 헤더 영역 -->
    <header class="bg-white shadow-sm sticky top-0 z-50 border-b border-orange-100">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- 로고 -->
            <a href="index.php" class="text-2xl font-bold text-orange-600 flex items-center gap-2 hover:opacity-90 transition">
                <span>🎈</span>
                <span>컴티샘의 정보교실</span>
            </a>

            <!-- 상단 메뉴 (미연결) -->
            <nav class="flex items-center gap-8">
                <a href="#" class="text-gray-600 hover:text-orange-600 font-semibold text-lg transition">공지사항</a>
                <a href="#" class="text-gray-600 hover:text-orange-600 font-semibold text-lg transition">자료실</a>
            </nav>
        </div>
    </header>

    <!-- 메인 콘텐츠 영역 -->
    <main class="max-w-6xl mx-auto px-6 py-12 flex-grow w-full">
        <!-- 환영 배너 -->
        <div class="bg-gradient-to-r from-orange-500 to-amber-500 rounded-3xl p-8 md:p-12 text-white shadow-lg mb-12 flex flex-col md:flex-row items-center justify-between gap-6">
            <div>
                <span class="bg-white/20 text-white text-sm px-3 py-1 rounded-full font-medium inline-block mb-3">Middle School SW & AI Lab</span>
                <h1 class="text-3xl md:text-4xl font-extrabold mb-3">즐거운 코딩과 정보 탐구의 세계로!</h1>
                <p class="text-orange-100 text-lg">수업 시간에 필요한 다양한 앱과 학습 도구를 모아두었습니다.</p>
            </div>
            <div class="text-6xl md:text-8xl bg-white/10 p-6 rounded-2xl backdrop-blur-sm">
                💻
            </div>
        </div>

        <!-- 전체 앱 모아보기 섹션 -->
        <section>
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 flex items-center gap-2">
                    <span class="w-3 h-8 bg-orange-500 rounded-full inline-block"></span>
                    전체 앱 모아보기
                </h2>
                <span class="text-sm text-gray-500">총 6개의 학습 도구</span>
            </div>

            <!-- 앱 카드 그리드 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- 카드 1: 엔트리 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition border border-orange-100 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">🐱</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">엔트리 (Entry)</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">블록 코딩으로 쉽고 재미있게 논리적 사고력을 키워보세요.</p>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center text-sm font-bold text-orange-600 hover:text-orange-700">
                        바로가기 &rarr;
                    </a>
                </div>

                <!-- 카드 2: 스크래치 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition border border-orange-100 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">🌍</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">스크래치 (Scratch)</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">나만의 애니메이션, 게임, 이야기를 창의적으로 만들어보세요.</p>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center text-sm font-bold text-orange-600 hover:text-orange-700">
                        바로가기 &rarr;
                    </a>
                </div>

                <!-- 카드 3: 파이썬 플레이그라운드 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition border border-orange-100 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">🐍</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">파이썬 플레이그라운드</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">텍스트 코딩의 기초를 다지는 온라인 파이썬 실습 공간입니다.</p>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center text-sm font-bold text-orange-600 hover:text-orange-700">
                        바로가기 &rarr;
                    </a>
                </div>

                <!-- 카드 4: 한컴 타자연습 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition border border-orange-100 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">⌨️</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">타자 연습</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">정보 수업의 기본! 정확하고 빠른 타자 실력을 길러보세요.</p>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center text-sm font-bold text-orange-600 hover:text-orange-700">
                        바로가기 &rarr;
                    </a>
                </div>

                <!-- 카드 5: AI 체험존 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition border border-orange-100 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">🤖</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">AI 체험존</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">인공지능 모델을 직접 다루고 다양한 AI 기술을 체험해봅니다.</p>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center text-sm font-bold text-orange-600 hover:text-orange-700">
                        바로가기 &rarr;
                    </a>
                </div>

                <!-- 카드 6: 디지털 리터러시 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition border border-orange-100 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition">📚</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">디지털 저작권 &amp; 보안</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">올바른 인터넷 예절과 정보 보안 상식을 퀴즈와 함께 배워요.</p>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center text-sm font-bold text-orange-600 hover:text-orange-700">
                        바로가기 &rarr;
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- 하단 푸터 영역 -->
    <footer class="bg-white border-t border-orange-100 py-8 mt-16 text-center text-gray-500 text-sm">
        <p>&copy; <?php echo date('Y'); ?> 🎈 컴티샘의 정보교실. All rights reserved.</p>
    </footer>

</body>
</html>