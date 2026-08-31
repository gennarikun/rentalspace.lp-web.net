<?php
$pageTitle = '河口湖の無料の保護猫カフェ・コミュニティスペース・コワーキングスペース・レンタルスペース【アトリエ高菜先生】';
$basePath = './';
$canonicalUrl = '/';
$bodyClass = 'home wp-singular page-template-default page page-id-5672 wp-theme-lightning fa_v7_css bootstrap4 device-pc';
$pageCSS = [];
include 'head-common.php';
include 'header.php';
?>
<style>
/* ==== お知らせバー（9/23 2周年祭告知） ==== */
.ats-announce-bar {
  background: linear-gradient(90deg, #8C1D28, #D7263D);
  color: #fff;
  padding: 10px 16px;
  text-align: center;
}
.ats-announce-inner {
  max-width: 960px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  flex-wrap: wrap;
}
.ats-announce-badge {
  background: #F0B429;
  color: #060A24;
  font-weight: 800;
  font-size: 12px;
  padding: 3px 10px;
  border-radius: 20px;
  letter-spacing: 1px;
}
.ats-announce-text {
  font-size: 14px;
  font-weight: 600;
  margin: 0;
}
.ats-announce-text a {
  color: #FBDD8B;
  text-decoration: underline;
  font-weight: 800;
}
@media (max-width: 480px) {
  .ats-announce-text { font-size: 12px; }
}

/* ==== 代表＆高菜先生紹介セクション（空白解消） ==== */
.ats-story-block {
  margin-bottom: 64px;
  padding-bottom: 48px;
  border-bottom: 1px solid #eee;
}
.ats-story-block:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none;
}
.ats-story-header {
  text-align: center;
  margin-bottom: 28px;
}
.ats-story-name {
  font-size: 1.5rem;
  font-weight: 800;
  margin-bottom: 6px;
}
.ats-story-name-en {
  font-size: 0.85rem;
  font-weight: 400;
  color: #999;
}
.ats-story-role {
  display: block;
  font-size: 0.9rem;
  color: #888;
  margin-top: 6px;
  line-height: 1.6;
}
.ats-story-catch {
  font-size: 1.05rem;
  font-weight: 700;
  color: #b9860b;
  margin-top: 14px;
  line-height: 1.8;
}
.ats-story-intro {
  display: flex;
  align-items: center;
  gap: 24px;
  max-width: 700px;
  margin: 0 auto 40px;
}
.ats-story-icon {
  flex-shrink: 0;
  width: 110px;
  height: 110px;
  border-radius: 50%;
  overflow: hidden;
}
.ats-story-icon img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.ats-story-desc {
  flex: 1;
  font-size: 0.95rem;
  line-height: 1.9;
  color: #444;
}
.ats-story-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: start;
}
.ats-story-list {
  display: flex;
  flex-direction: column;
}
.ats-story-item {
  padding: 18px 4px;
  border-bottom: 1px solid #eee;
  cursor: pointer;
  transition: background 0.2s;
}
.ats-story-item:hover {
  background: #fafafa;
}
.ats-story-item.active {
  border-left: 3px solid #b9860b;
  padding-left: 14px;
  background: #fff8ec;
}
.ats-story-item-title {
  font-weight: 700;
  font-size: 1rem;
  margin-bottom: 8px;
  color: #222;
}
.ats-story-item-text {
  font-size: 0.9rem;
  line-height: 1.85;
  color: #555;
}
.ats-story-visual {
  position: sticky;
  top: 100px;
  border-radius: 12px;
  overflow: hidden;
}
.ats-story-img {
  display: none;
}
.ats-story-img.active {
  display: block;
}
.ats-story-img img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 12px;
}
.ats-story-sp-img {
  display: none;
}
@media (max-width: 767px) {
  .ats-story-grid {
    grid-template-columns: 1fr;
  }
  .ats-story-visual {
    display: none;
  }
  .ats-story-intro {
    flex-direction: column;
    text-align: center;
    gap: 16px;
  }
  .ats-story-sp-img {
    display: block;
    margin-top: 14px;
    border-radius: 10px;
    overflow: hidden;
  }
  .ats-story-sp-img img {
    width: 100%;
    height: auto;
    display: block;
  }
}

/* ==== 100人で1匹の猫を飼う／ごはん無料のコミュニティ ==== */
.ats-theme-box {
  max-width: 620px;
  margin: 40px auto 0;
  padding: 28px 24px;
  text-align: center;
  background: #fff8ec;
  border: 1px solid #eadcb8;
  border-radius: 12px;
}
.ats-theme-label {
  display: inline-block;
  font-size: 0.8rem;
  font-weight: 800;
  letter-spacing: 2px;
  color: #b9860b;
  margin-bottom: 12px;
}
.ats-theme-text {
  font-size: 1.05rem;
  font-weight: 700;
  line-height: 1.9;
  color: #333;
}
.ats-origin-box {
  max-width: 800px;
  margin: 32px auto 0;
  padding: 28px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.05);
}
.ats-origin-title {
  font-size: 1.1rem;
  font-weight: 800;
  margin-bottom: 14px;
  text-align: center;
  color: #222;
}
.ats-news-list {
  list-style: none;
  margin: 24px 0 0;
  padding: 0;
}
.ats-news-item {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 16px 18px;
  background: #fff8ec;
  border: 1px solid #eadcb8;
  border-radius: 10px;
  margin-bottom: 12px;
  flex-wrap: wrap;
}
.ats-news-tag {
  flex-shrink: 0;
  background: #b9860b;
  color: #fff;
  font-size: 0.75rem;
  font-weight: 800;
  padding: 3px 10px;
  border-radius: 20px;
}
.ats-news-text {
  margin: 0;
  font-size: 0.95rem;
  line-height: 1.7;
  color: #333;
}
.ats-concept-box-reverse {
  flex-direction: row-reverse;
}
@media (max-width: 767px) {
  .ats-concept-box-reverse {
    flex-direction: column;
  }
}

/* ==== フェードイン演出が発火しない場合でもコンテンツを必ず表示する保険 ==== */
.ats-scroll-fade {
  opacity: 1 !important;
  visibility: visible !important;
  transform: none !important;
}
#js-ats-intro-story,
#js-ats-intro-story *,
#js-ats-access,
#js-ats-access * {
  color: inherit;
}
#js-ats-intro-story .ats-story-desc,
#js-ats-intro-story .ats-story-item-text,
#js-ats-intro-story .ats-story-name,
#js-ats-intro-story .ats-story-item-title {
  color: #333 !important;
}
</style>

<div class="ats-announce-bar">
  <div class="ats-announce-inner">
    <span class="ats-announce-badge">お知らせ</span>
    <p class="ats-announce-text">
      9月23日（水・祝）は「アトリエ高菜先生 2周年祭」開催！<a href="/anniversary2026/">詳しくはこちら →</a>
    </p>
  </div>
</div>

<div class="section siteContent">
<div class="container">
<div class="row">
<div class="col mainSection mainSection-col-one">
<article class="post-5672 page type-page status-publish hentry" id="post-5672">
<div class="entry-body">
<div class="atelier-takana-sensei">
<div class="ats-hero"><video autoplay="autoplay" class="ats-hero-bg" height="150" loop="loop" muted="" poster="./assets/c4c277_hero_poster_v3-scaled.png" width="300">
<source src="./assets/22aaef_hero_v3_minify.mp4" type="video/mp4"/>
</video>
<div class="ats-hero-content ats-scroll-fade">
<p class="ats-hero-sub">山梨県 河口湖の無料保護猫カフェ<br/>
                      アトリエ高菜先生</p>
<h1 class="ats-hero-main">猫に会うのに､<br class="ats-sp-only"/>理由はいらない｡</h1>
</div>
<div class="ats-separator ats-sep-white"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-white" id="ats-news">
<div class="ats-container ats-scroll-fade" style="max-width:720px;">
<h2 class="ats-title">NEWS</h2>
<ul class="ats-news-list">
<li class="ats-news-item">
<span class="ats-news-tag">お知らせ</span>
<p class="ats-news-text">利用時間変更のお知らせ：これまでの11:00〜17:00から、<strong class="ats-text-accent">13:00〜18:00</strong>に変更いたします。</p>
</li>
</ul>
</div>
</div>
<div class="ats-section bg-white">
<p><img alt="Cat Deco" class="ats-deco-cat ats-cat-pos-hero" decoding="async" src="./assets/81f85c_23.png"/></p>
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">「アトリエ高菜先生」とは？</h2>
<div class="ats-concept-box">
<div class="ats-concept-text">
<p class="ats-mb-md ats-text-justify">河口湖の保護猫がいる無料猫カフェ・コミュニティスペース「アトリエ高菜先生」では、どなたでも<strong class="ats-text-accent">無料</strong>でご利用いただけます。</p>
<p class="ats-mb-lg ats-text-justify">弊社で行っております<strong class="ats-text-accent">保護猫活動</strong>の一環として、保護猫がいる無料コミュニティスペースで猫たちと戯れあえる環境を提供しております。</p>
<p class="ats-mb-lg ats-text-justify">保護猫施設アトリエ高菜先生は【保護猫とは】を伝えるための無料施設です。小さなお子様、高齢の方、外国の方など、誰もが安心して過ごせる場所です。猫たちとのふれあいを通じ、人と人がゆるやかにつながり、年齢や国籍、立場を超えて集まれる居場所であることに大きな意義があります。</p>
<p><a class="ats-btn-outline" href="#js-ats-access">アクセス<span class="ats-ml-sm">→</span></a></p>
</div>
<div class="ats-concept-img"><img alt="Atelier Concept" decoding="async" src="./assets/ae11a8_434123_0.jpg"/></div>
</div>
<div class="ats-origin-box">
<h3 class="ats-origin-title">100人で1匹の猫を飼う、社会貢献事業の原点</h3>
<p class="ats-text-justify">
                    アトリエ高菜先生では「100人で１匹の猫を飼う」というコンセプトで保護活動を行っています。医療費やエサの寄付、ボランティアさん達のおかげで猫が自由に暮らせる環境となっています。
                  </p>
</div>
<div class="ats-theme-box">
<span class="ats-theme-label">THEME</span>
<p class="ats-theme-text">
                    1人が100匹の猫を保護するのではなく<br/>
                    100人で1匹の猫を飼う<br/>
                    継続的な保護猫活動
                  </p>
</div>
</div>
</div>
<div class="ats-section bg-white">
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">お仲間コミュニティ</h2>
<div class="ats-concept-box">
<div class="ats-concept-text">
<p class="ats-mb-md ats-text-justify">ごはん無料のボランティア制度・無料食事会は、子ども食堂から始まった、大人も来れる食事会です。ボランティアや利用者、スタッフ向けの無料食事会・BBQなどを月に複数回行っており、猫のお世話をしてくれた人たちに対するお礼でもあります。</p>
<p class="ats-text-justify">猫を中心としたコミュニティ作りを行い、人のつながりが自然とできてその中で猫が幸せに暮らすというモデル作りを目指しています。</p>
</div>
<div class="ats-concept-img"><img alt="お仲間コミュニティ" decoding="async" src="./assets/9141c7_14.png"/></div>
</div>
</div>
</div>
<div class="ats-section bg-white" id="ats-cats">
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">猫のご紹介</h2>
<p class="ats-text-center ats-mb-xxl">
                      アトリエ高菜先生には高菜先生をはじめ、事情があり飼えなくなってしまった兄弟、保健所行きが決まっていた子猫、大怪我していた猫など訳アリの保護猫が計７匹住んでいます。なかなか猫に触れ合えることのない方はぜひ会いにきてください！
                    </p>
<div class="ats-cats-gallery">
<div class="ats-cats-nav"><button class="ats-cat-nav-item active" data-target="cat-takana"><span class="ats-nav-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/></span><span class="ats-nav-name">高菜先生</span></button><br/>
<button class="ats-cat-nav-item" data-target="cat-uni"><span class="ats-nav-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/></span><span class="ats-nav-name">デイビッド<br/>
                            ウニ</span></button><br/>
<button class="ats-cat-nav-item" data-target="cat-shishamo"><span class="ats-nav-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/></span><span class="ats-nav-name">ししゃも<br/>
                            ノートルダム</span></button><br/>
<button class="ats-cat-nav-item" data-target="cat-milk"><span class="ats-nav-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/></span><span class="ats-nav-name">ミルク山岡</span></button><br/>
<button class="ats-cat-nav-item" data-target="cat-pippi"><span class="ats-nav-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/></span><span class="ats-nav-name">小野の<br/>
                            おピッピ</span></button><br/>
<button class="ats-cat-nav-item" data-target="cat-mino"><span class="ats-nav-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/></span><span class="ats-nav-name">綾小路<br/>
                            嬢ミノ</span></button><br/>
<button class="ats-cat-nav-item" data-target="cat-tsubasa"><span class="ats-nav-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/></span><span class="ats-nav-name">エドモンド<br/>
                            本田翼</span></button>
</div>
<div class="ats-cats-view">
<div class="ats-cat-panel active" id="cat-takana">
<div class="ats-cat-photo-frame"><img alt="高菜先生" class="ats-cat-poster" decoding="async" src="./assets/0e45a4_20251017_hogoneko1.png"/></div>
<div class="ats-cat-info-area">
<div class="ats-cat-header">
<p><span class="ats-cat-role-label">代表取締役猫</span></p>
<h3 class="ats-cat-main-name">高菜先生</h3>
</div>
<p class="ats-cat-desc-text">
                              2019年8月2日宮崎県出身。2019年10月より山梨県に移住し超超エリート株式会社に入社。2代目看板猫をつとめる。現在は旨辛唐辛子ブランド【激辛高菜先生】や猫カフェ・コミュニティスペース【アトリエ高菜先生】の顔として活動している。世界一有名な猫を目指している。
                            </p>
<div class="ats-cat-links"><a class="ats-cat-link" href="https://xxxxxx.lp-web.net/" rel="noopener noreferrer" target="_blank">高菜先生グループサイト →</a></div>
</div>
</div>
<div class="ats-cat-panel" id="cat-uni">
<div class="ats-cat-photo-frame"><img alt="デイビッド・ウニ" class="ats-cat-poster" decoding="async" src="./assets/63eab3_20251017_hogoneko2.png"/></div>
<div class="ats-cat-info-area">
<div class="ats-cat-header">
<p><span class="ats-cat-role-label">染め物職人</span></p>
<h3 class="ats-cat-main-name">デイビッド・ウニ</h3>
</div>
<p class="ats-cat-desc-text">
                              2021年生まれの4歳。ししゃも・ノートルダムの弟。山梨県都留市出身。永遠と遊んでられる体力の持ち主で、常にオモチャで遊んでおきたい行動派猫。遊んでくれるなら誰でもOKで人見知りなど一切しない白猫。非常にすばしっこい。
                            </p>
</div>
</div>
<div class="ats-cat-panel" id="cat-shishamo">
<div class="ats-cat-photo-frame"><img alt="ししゃも・ノートルダム" class="ats-cat-poster" decoding="async" src="./assets/a2da8f_20251017_hogoneko3.png"/></div>
<div class="ats-cat-info-area">
<div class="ats-cat-header">
<p><span class="ats-cat-role-label">Webエンジニア</span></p>
<h3 class="ats-cat-main-name">ししゃも・ノートルダム</h3>
</div>
<p class="ats-cat-desc-text">
                              2021年生まれの4歳。デイビッド・ウニの兄。山梨県都留市出身。基本的にやる気がなくほとんど何もしないけど、お腹が空いてるときだけはアピールがすごい。人見知りはしないけど積極的に近寄ってくるわけでもない。難病もちで何度か手術をしている。
                            </p>
</div>
</div>
<div class="ats-cat-panel" id="cat-milk">
<div class="ats-cat-photo-frame"><img alt="ミルク山岡" class="ats-cat-poster" decoding="async" src="./assets/e9ee50_20251017_hogoneko4.png"/></div>
<div class="ats-cat-info-area">
<div class="ats-cat-header">
<p><span class="ats-cat-role-label">麺職人</span></p>
<h3 class="ats-cat-main-name">ミルク山岡</h3>
</div>
<p class="ats-cat-desc-text">
                              2024年生まれの猫。山梨県笛吹市のとある企業の敷地内で保護され、誰も引き取ることができず保健所に行くことに。アトリエ高菜先生の代表桑原淳がたまたまSNSでそれを見かけて引き取ることに。非常にヤンチャで元気。一生走っている。
                            </p>
</div>
</div>
<div class="ats-cat-panel" id="cat-pippi">
<div class="ats-cat-photo-frame"><img alt="小野のおピッピ" class="ats-cat-poster" decoding="async" src="./assets/3d6dce_20251017_hogoneko5.png"/></div>
<div class="ats-cat-info-area">
<div class="ats-cat-header">
<p><span class="ats-cat-role-label">すりだね製造部長</span></p>
<h3 class="ats-cat-main-name">小野のおピッピ</h3>
</div>
<p class="ats-cat-desc-text">
                              山梨県笛吹市出身。年齢不詳で推定10歳から15歳のおばあちゃん。大けがしているところを保護され、療養ののちにアトリエへ。基本的に寝ているが気分で膝に乗って甘えてくる。</p>
</div>
</div>
<div class="ats-cat-panel" id="cat-mino">
<div class="ats-cat-photo-frame"><img alt="綾小路 嬢ミノ" class="ats-cat-poster" decoding="async" src="./assets/8048be_20251017_hogoneko6.png"/></div>
<div class="ats-cat-info-area">
<div class="ats-cat-header">
<p><span class="ats-cat-role-label">バイトリーダー</span></p>
<h3 class="ats-cat-main-name">綾小路 嬢ミノ</h3>
</div>
<p class="ats-cat-desc-text">
                              2025年9月生まれ。エドモンド本田翼の姉。富士河口湖町出身。基本的におてんば、暴走しがちなタイプの女の子。スタッフが飲み会をしている時にノリで名前をつけられてしまった。</p>
</div>
</div>
<div class="ats-cat-panel" id="cat-tsubasa">
<div class="ats-cat-photo-frame"><img alt="エドモンド本田翼" class="ats-cat-poster" decoding="async" src="./assets/tsubasa.png"/></div>
<div class="ats-cat-info-area">
<div class="ats-cat-header">
<p><span class="ats-cat-role-label">自由人</span></p>
<h3 class="ats-cat-main-name">エドモンド本田翼</h3>
</div>
<p class="ats-cat-desc-text">
                              2025年9月生まれ。綾小路嬢ミノの妹。富士河口湖町出身。とにかく動いてないと気がすまないタイプ。当初オスだと勘違いして副キャプテン翼の名を授かるも、のちに女の子だとわかり改名。
                            </p>
</div>
</div>
</div>
</div>
</div>
<div class="ats-separator ats-sep-beige"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-beige"><img alt="" class="ats-deco-cat ats-cat-pos-hero" decoding="async" height="150" src="./assets/e75bca_27-150x150.png" width="150"/>
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">利用の流れ</h2>
<div class="ats-flow-container">
<p class="ats-text-center ats-mb-xl">
                        当店の利用の流れを簡単にご説明いたします。初めてご利用される方にもリラックスして猫たちとのひとときをお楽しみいただけるよう、御来店頂いた際にも改めてご説明させて頂きます。</p>
<div class="ats-flow-grid">
<div class="ats-flow-item">
<div class="ats-flow-icon"><svg fill="#fff" height="28" viewbox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">
<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z">
</path>
</svg></div>
<div>
<h3 class="ats-flow-title">到着</h3>
<p>河口湖駅から徒歩12分。駐車場は10台完備しております。</p>
</div>
</div>
<div class="ats-flow-item">
<div class="ats-flow-icon"><svg fill="#fff" height="28" viewbox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">
<path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z">
</path>
</svg></div>
<div>
<h3 class="ats-flow-title">受付</h3>
<p>店内に入りましたらスタッフにお声がけください。簡単なご説明をさせていただきます。</p>
</div>
</div>
<div class="ats-flow-item">
<div class="ats-flow-icon"><svg fill="#fff" height="28" viewbox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">
<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
</svg></div>
<div>
<h3 class="ats-flow-title">猫とのふれあい</h3>
<p>猫たちと自由にふれあいをお楽しみください。フリードリンクもご用意しております。</p>
</div>
</div>
<div class="ats-flow-item">
<div class="ats-flow-icon"><svg fill="#fff" height="28" viewbox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">
<path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
</path>
</svg></div>
<div>
<h3 class="ats-flow-title">退店</h3>
<p>お帰りの際はスタッフにお声がけください。またのご来店をお待ちしております。</p>
</div>
</div>
</div>
<div class="ats-price-box">
<h3 class="ats-price-title">ご利用料金</h3>
<p class="ats-price-text">入場料<span class="ats-price-free">無料</span></p>
</div>
</div>
</div>
<div class="ats-separator ats-sep-white mod-rotate"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section ats-parallax-section">
<div class="ats-parallax-overlay"></div>
<div class="ats-container ats-scroll-fade">
<div class="ats-support-layout">
<div class="ats-support-visual"><img alt="Support Cats" class="ats-support-main-img" decoding="async" src="./assets/93701d_434121_0.jpg"/></div>
<div class="ats-support-text-card">
<h2 class="ats-title ats-text-left ats-mb-md">ご支援のお願い</h2>
<p class="ats-text-justify ats-mb-lg">
                          アトリエ高菜先生は、すべての方に安心して訪れていただける「無料の保護猫コミュニティスペース」として運営しております。ドリンクや猫たちのごはん、トイレの砂など、日々の運営に必要なものはすべて、これまで私たち自身でまかなってきました。
                        </p>
<p class="ats-text-justify ats-mb-lg">
                          今後は、より持続可能な形でこの場所を守っていくために、Amazon「欲しいものリスト」を通じたご支援をお願いすることにしました。ご無理のない範囲で、応援いただけましたらとても嬉しいです。
                        </p>
<div class="ats-text-left"><a class="ats-btn-gradient" href="https://www.amazon.co.jp/hz/wishlist/ls/2RP1C9QDVHN3P/ref=hz_ls_biz_ex" rel="noopener noreferrer" target="_blank">支援する</a></div>
</div>
</div>
</div>
<div class="ats-separator ats-sep-dark"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-dark"><img alt="Cat Deco" class="ats-deco-cat ats-cat-pos-video" decoding="async" src="./assets/d93ac9_2.png"/>
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">アトリエ高菜先生の雰囲気</h2>
<div class="ats-video-wrapper"><iframe allowfullscreen="allowfullscreen" frameborder="0" src="https://www.youtube.com/embed/ccvZbxHYdeM?feature=oembed" title="YouTube video player"></iframe></div>
</div>
<div class="ats-separator ats-sep-beige"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-beige">
<p><img alt="Cat Deco" class="ats-deco-cat ats-cat-pos-facilities" decoding="async" src="./assets/ad7ac3_3.png"/></p>
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">猫と過ごすための充実設備</h2>
<ul class="ats-facility-list">
<li class="ats-facility-item">
<div class="ats-icon-box"><svg fill="currentColor" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z">
</path>
</svg></div>
<p><span class="ats-facility-name">Wi-Fi</span></p>
</li>
<li class="ats-facility-item">
<div class="ats-icon-box"><svg fill="currentColor" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M16 9V4h-2v5h-4V4H8v5c0 1.86 1.28 3.41 3 3.86V21h2v-8.14c1.72-.45 3-2 3-3.86z">
</path>
</svg></div>
<p><span class="ats-facility-name">コンセント</span></p>
</li>
<li class="ats-facility-item">
<div class="ats-icon-box"><svg fill="currentColor" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M20 3H4v10c0 2.21 1.79 4 4 4h6c2.21 0 4-1.79 4-4v-3h2c1.11 0 2-.89 2-2V5c0-1.11-.89-2-2-2zm0 5h-2V5h2v3zM2 21h18v-2H2v2z">
</path>
</svg></div>
<p><span class="ats-facility-name">フリードリンク</span></p>
</li>
<li class="ats-facility-item">
<div class="ats-icon-box"><svg fill="currentColor" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z">
</path>
</svg></div>
<p><span class="ats-facility-name">ロッカー</span></p>
</li>
</ul>
</div>
<div class="ats-separator ats-sep-white"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-white">
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">アトリエでの過ごし方</h2>
<div class="ats-cases-grid">
<div class="ats-case-item">
<div class="ats-case-img-wrap">
<p><img alt="リモートワーク" class="ats-case-img" decoding="async" src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?w=600&amp;q=80"/></p>
<div class="ats-case-icon-badge"><svg fill="#fff" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"></path>
</svg></div>
</div>
<div class="ats-case-content">
<h3 class="ats-case-title">リモートワーク</h3>
<p>Wi-Fi、電源完備。静かな環境で集中して作業に取り組めます。</p>
</div>
</div>
<div class="ats-case-item">
<div class="ats-case-img-wrap">
<p><img alt="勉強・読書" class="ats-case-img" decoding="async" src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=600&amp;q=80"/></p>
<div class="ats-case-icon-badge"><svg fill="#fff" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"></path>
</svg></div>
</div>
<div class="ats-case-content">
<h3 class="ats-case-title">勉強・読書</h3>
<p>落ち着いた空間で勉強や読書に没頭できます。漫画も読み放題です。</p>
</div>
</div>
<div class="ats-case-item">
<div class="ats-case-img-wrap">
<p><img alt="家族での利用" class="ats-case-img" decoding="async" src="https://images.unsplash.com/photo-1511895426328-dc8714191300?w=600&amp;q=80"/></p>
<div class="ats-case-icon-badge"><svg fill="#fff" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path>
</svg></div>
</div>
<div class="ats-case-content">
<h3 class="ats-case-title">家族での利用</h3>
<p>お子様連れも大歓迎。猫との触れ合いを通じて情操教育にも最適です。</p>
</div>
</div>
<div class="ats-case-item">
<div class="ats-case-img-wrap">
<p><img alt="撮影・SNS" class="ats-case-img" decoding="async" src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&amp;q=80"/></p>
<div class="ats-case-icon-badge"><svg fill="#fff" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zM9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9z"></path>
</svg></div>
</div>
<div class="ats-case-content">
<h3 class="ats-case-title">撮影・SNS</h3>
<p>可愛らしい猫たちやフォトジェニックな内装で、素敵な写真が撮影できます。</p>
</div>
</div>
</div>
</div>
<div class="ats-separator ats-sep-primary"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-primary">
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">アトリエ高菜先生の魅力</h2>
<div class="ats-features-grid">
<div class="ats-feature-item">
<div class="ats-feature-img"><img alt="猫カフェ" decoding="async" src="./assets/af4c2d_1749032903033.jpg"/></div>
<h3 class="ats-feature-title">猫カフェ</h3>
<p class="ats-text-justify">
                          当店は河口湖・富士吉田市の無料猫カフェです。猫好きな方はもちろん、猫と触れ合ったことが無い方や猫を飼っているけど他の猫を色んな猫と触れ合ってみたい方にもオススメです。</p>
</div>
<div class="ats-feature-item">
<div class="ats-feature-img"><img alt="世界一の保護猫高菜先生" decoding="async" src="./assets/f0586d_1.png"/></div>
<h3 class="ats-feature-title">世界一の保護猫高菜先生</h3>
<p class="ats-text-justify">高菜先生は世界一有名な保護猫になるため様々なブランドの顔になっています。猫カフェの看板にもなっています。</p>
</div>
<div class="ats-feature-item">
<div class="ats-feature-img"><img alt="世界の猫グッズ展示" decoding="async" src="./assets/13796e_IMG20250719100736-scaled.jpg"/></div>
<h3 class="ats-feature-title">河口湖No.1の漫画ラインナップ</h3>
<p class="ats-text-justify">河口湖エリアには漫画喫茶がございませんが、当店では多数ご用意しております。漫画も無料です。</p>
</div>
<div class="ats-feature-item">
<div class="ats-feature-img"><img alt="保護猫活動の取り組み" decoding="async" src="./assets/9141c7_14.png"/></div>
<h3 class="ats-feature-title">保護猫活動の取り組み</h3>
<p class="ats-text-justify">
                          弊社への寄付や募金はすべて保護猫活動に充てさせていただいております。訪れた方が保護猫活動に興味を持ったり、実際に猫を保護するきっかけになればと考えています。
                        </p>
</div>
</div>
</div>
<div class="ats-separator ats-sep-beige"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-beige"><img alt="Cat Deco" class="ats-deco-cat ats-cat-pos-reviews" decoding="async" src="./assets/1d4a3f_4.png"/>
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">お客様の声</h2>
<div class="ats-carousel-container"><button class="ats-carousel-btn ats-btn-prev" id="atsReviewPrev"><svg fill="#fff" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
</svg></button>
<div class="ats-carousel-track-container">
<ul class="ats-carousel-track" id="atsReviewTrack">
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                家で猫が飼えないので、猫に触れ合えるのは素敵でした。しかも無料(寄付はしましょう)ですから更に素敵です。猫も人懐っこくて大人しくて、沢山撫でても大丈夫でした❤基本時間制限もないみたいで、機会があればまた行きたいです。
                              </p>
</div>
</li>
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                元旦に初めてお伺いしました！吉田のうどん大変美味しく頂きました。そして、ネコちゃんカフェで遊ばせて頂きました⭐︎看板ネコちゃんの高菜ちゃん、おとなしくてとっても可愛いです！！ぜったいにまた遊びに来たいと思います♪スタッフさんもとても親切で楽しいお正月をありがとうございました♪
                              </p>
</div>
</li>
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                スタッフのお兄さんの対応が素晴らしく、最高の体験ができました。営業時間が柔軟なので、行く前によく確認することをお勧めします。彼はチャリティーで保護猫カフェを運営しており、寄付は大歓迎されます。彼は簡単な英語を話し、入場は無料です。飲み物やお菓子も無料です。ここでは最高級の日本のおもてなしが受けられます。😊冬場は上着を持参してください。夏場でも猫がくっついてくることがあるので羽織るものがあると良いですよ。
                              </p>
</div>
</li>
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                猫好きの知り合いに教えてもらい早速お邪魔しました。緊張しながら中に入り、「初めてなんですけど」っと言うと店員さんのお兄さんが丁寧に利用方法を教えてくださいました。基本全て無料（募金制）♪この時点でマジ素敵。猫様めちゃくちゃ懐っこい❤️自ら抱っこされに来てくれるし、ホント可愛くて長々と居座りましたw
                                またお邪魔させてください🙏</p>
</div>
</li>
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                河口湖をドライブ中に高菜先生の大きな顔の看板を見つけ、車を停めて調べてみたら保護猫のサンクチュアリだと分かりました。オーナーさんはとても親切で案内してくれました。猫たちはとても遊び好きで元気いっぱいで、撫でられるのが大好きでした。入場は無料ですが寄付で運営されています。ぜひ寄付をお願いします！
                              </p>
</div>
</li>
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                素晴らしい猫カフェです。とても居心地が良く静かで、あらゆる種類の愛らしい猫たちがいます。年上の猫たちは少し離れて寝ていましたが、2匹の子猫はすぐに私たちと遊びに来てくれました！彼らが保護猫たちをとても大切にしているのがよく分かるので、募金箱への寄付を強くお勧めします😊
                              </p>
</div>
</li>
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                素敵な空間と可愛い猫達のいるアトリエです。真っ赤なリボンをつけたアトリエのリーダー高菜先生がとても魅力的です、可愛い顔とどっしりと構えたわがままボディー人と人との縁を繋げる不思議な猫です。高菜先生が子猫の時から知ってるので、今後高菜先生が有名になるのがとても楽しみです。河口湖には高菜先生に会うために行っているようなものです。
                              </p>
</div>
</li>
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                もっと星を付けたいくらいです！自由に行き来する猫たちがいる、折衷的で居心地の良い空間に無料で入れます（寛大な寄付をお願いします）。猫たちはみんなとてもフレンドリーで可愛かったです。子猫たちと遊んで楽しい時間を過ごしました！すべての保護動物があなたの寄付によって支えられています。
                              </p>
</div>
</li>
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                先日、向かいのうどん屋さんでうどんとほうとう体験をさせてもらった後に伺いました！お腹いっぱいになったあとに猫さんに癒されて、心もいっぱいになりました🥺内装や外装をDIYされているみたいで、これをDIY！？と、驚きました！！猫さんももちろん、内装や外装をじっくり見るのも楽しかったです(((o(ﾟ▽ﾟ)o)))グッズもたくさんあって、記念になると思うので手に入れてみてください♡
                                高菜先生ステッカーは携帯に挟んでます( ∩’-‘⊂ )</p>
</div>
</li>
<li class="ats-carousel-slide">
<div class="ats-review-card">
<div class="ats-review-header">
<div class="ats-star-rating">★★★★★</div>
</div>
<p class="ats-review-text">
                                なかなか家で猫を飼うことが叶わないので、ここで堪能してもらおうと子どもを連れて行ったら帰りたくない！と言い出すほど猫ちゃん達と楽しんでいました。しかも無料！！！とても居心地がよく他のお客さんとの交流もあって、まったりした時間が流れます。系列店で子ども食堂をしていたり地域貢献にも力を入れているようなのでたくさんの方にこの場所を知ってもらえるといいなと思います！
                              </p>
</div>
</li>
</ul>
</div>
<p><button class="ats-carousel-btn ats-btn-next" id="atsReviewNext"><svg fill="#fff" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
</svg></button></p>
<p></p>
</div>
</div>
<div class="ats-separator ats-sep-wood"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-wood">
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">よくあるご質問</h2>
<div class="ats-faq-grid">
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>最寄駅はどこですか？</div>
<div class="ats-faq-a">富士急行線「河口湖駅」です。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>河口湖駅から徒歩何分ですか？</div>
<div class="ats-faq-a">徒歩12分です。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>予約は必要ですか？</div>
<div class="ats-faq-a">予約は不要ですが、混雑時にはお待ちいただく場合があります。事前予約も可能です。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>駐車場はありますか？</div>
<div class="ats-faq-a">当店には専用の無料駐車場が10台ほどございます。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>利用時間は何時から何時までですか？</div>
<div class="ats-faq-a">当店の利用時間は13:00〜18:00です。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>Wi-Fiはどのような環境でしょうか？</div>
<div class="ats-faq-a">高速Wi-Fiを完備しており、リモートワークやオンライン会議に適しています。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>どのくらいの時間滞在できますか？</div>
<div class="ats-faq-a">利用時間中でしたら制限はございません。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>飲食物は持ち込んでもいいですか？</div>
<div class="ats-faq-a">原則自由ですが、猫に影響がある食べ物などもございますので気になる場合は事前にご相談ください。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>利用に年齢制限はありますか？</div>
<div class="ats-faq-a">年齢制限はありませんが、小さなお子様は保護者の同伴が必要です。安全のため、スタッフの指示に従っていただければ安心してご利用いただけます。
                        </div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>猫を抱っこしたりしてもいいですか？</div>
<div class="ats-faq-a">猫から近づいてきた場合は撫でても大丈夫ですが、無理に抱っこするのはご遠慮ください。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>猫アレルギーがあっても入店できますか？</div>
<div class="ats-faq-a">アレルギーをお持ちの方はご自身の体調にご注意ください。店内は清掃を徹底していますが、猫の毛やダストが気になる場合があります。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>猫を連れてきてもいいですか？</div>
<div class="ats-faq-a">申し訳ございませんが、当店の猫以外の動物はご入店いただけません。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>猫と遊べる時間帯に制限はありますか？</div>
<div class="ats-faq-a">猫たちは日中は活発ですが、昼寝をしていることもあります。猫が眠っている間はそっとしておいていただくか、優しく触ってあげて下さい。</div>
</div>
<div class="ats-faq-item">
<div class="ats-faq-q"><span class="ats-faq-q-icon">Q</span>店内で写真を撮ってもいいですか？</div>
<div class="ats-faq-a">はい、猫たちの写真は自由に撮影できます。ただし、フラッシュの使用は猫の負担になるためお控えください。</div>
</div>
</div>
</div>
<div class="ats-separator ats-sep-primary"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-primary">
<p><img alt="" class="ats-deco-cat ats-cat-pos-activity" decoding="async" height="150" src="./assets/e8d0ce_1-150x150.png" width="150"/></p>
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title ats-text-white">保護猫活動の取り組み</h2>
<div class="ats-activity-container">
<div class="ats-activity-row">
<div class="ats-activity-img-box"><img alt="保護猫活動" class="ats-activity-img" decoding="async" src="./assets/64ceef_ocean-surfing-4.png"/></div>
<div class="ats-activity-content">
<p class="ats-mb-md">
                            アトリエ高菜先生を運営する超超エリート株式会社・株式会社高菜先生ソーシャルエンタープライズでは『高菜先生を世界一有名な猫に』を合言葉に保護猫につながる活動を続けています。</p>
<p class="ats-mb-md">自社プロダクトやサービスの売上を保護猫活動に使用し、現在弊社では8匹の猫を保護しております。</p>
<p>また保護猫団体や社会支援団体への寄付も弊社代表桑原淳が個人で行っております。</p>
</div>
</div>
<div class="ats-activity-row ats-row-reverse">
<div class="ats-activity-img-box"><img alt="" class="aligncenter wp-image-6023 size-full" decoding="async" height="1156" loading="lazy" sizes="auto, (max-width: 1126px) 100vw, 1126px" src="./assets/f9fbbc_img_8dfa9c6d.png" srcset="./assets/f9fbbc_img_8dfa9c6d.png 1126w, ./assets/bfea6e_img_7e35c1b3.png 292w, ./assets/dc8362_img_b0181369.png 997w, ./assets/66a9ea_img_9ca55f89.png 768w" width="1126"/></div>
<div class="ats-activity-content">
<p>
                            看板猫である高菜先生を世界一有名にするため様々なサービスやプロダクトのパッケージやブランド名として使用していますが、高菜先生の存在を知っていただくことで保護猫活動に興味を持つ人が増え、また実際に保護する人が出てくることで少しでも猫の殺処分が減り結果として社会に貢献できる企業になれるのではと考えています。
                          </p>
</div>
</div>
<div class="ats-activity-row">
<div class="ats-activity-img-box"><img alt="猫カフェ河口湖" class="aligncenter wp-image-5483 size-full" decoding="async" height="1108" loading="lazy" sizes="auto, (max-width: 1477px) 100vw, 1477px" src="./assets/ec55fc_1749032903896.jpg" srcset="./assets/ec55fc_1749032903896.jpg 1477w, ./assets/6dc520_1749032903896-300x225.jpg 300w, ./assets/a35619_1749032903896-1024x768.jpg 1024w, ./assets/7feb4b_1749032903896-768x576.jpg 768w" width="1477"/></div>
<div class="ats-activity-content">
<p class="ats-mb-md">そのために無料の猫カフェ・コミュニティスペースも運営しております。</p>
<p>猫と人が幸せに暮らす世界を目指し、高菜先生の名を今後も広めてまいります。</p>
</div>
</div>
</div>
</div>
<div class="ats-container ats-scroll-fade"><a class="ats-banner-link" href="/weekend-staff/"><img alt="週末限定！猫カフェサポーター募集中" decoding="async" src="./assets/e8a136_img_e0bb6c92.png"/></a></div>
<div class="ats-separator ats-sep-white"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>




<div class="ats-section bg-wood">
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">ご利用のご注意事項</h2>
<p class="ats-text-center ats-mb-lg ats-text-primary ats-font-bold">以下の注意事項を遵守して頂いたお客様のみ当店をご利用頂けます。
                    </p>
<div class="ats-caution-grid">
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">店内の猫は自由に触れ合えますが、猫が嫌がる接し方をした場合、驚いた猫さんが引っ掻いたり噛んだりする可能性がございます。</p>
</div>
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">おなか、爪、尻尾の辺りは触られるのを嫌がる猫が多いです。極端に触りすぎないようにしましょう。</p>
</div>
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">店内で大声や騒音を出されますと猫が攻撃的になったり体調不良になる場合がございますのでご配慮ください。</p>
</div>
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">万が一、店内でお怪我をされた場合は応急処置はさせて頂きますが、治療費などの保証は致しかねます。</p>
</div>
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">猫アレルギーの方はご自身の体調を判断した上でご入店ください。発症した場合の責任は負いかねます。</p>
</div>
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">猫に人間の食べ物や飲み物は絶対に与えないでください。</p>
</div>
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">店内は禁煙となっております。</p>
</div>
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">携帯やカメラで撮影をする場合、フラッシュのご使用はご遠慮ください。</p>
</div>
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">
                          猫が飛び出す恐れがありますので、窓はお開けにならないようお願いします。入口と店内の扉に関しても、開けたら必ずすぐに閉めるようお願いします。</p>
</div>
<div class="ats-caution-card">
<div class="ats-caution-icon"><img alt="" decoding="async" src="./assets/6e2f8a_cat_icon.png"/>
</div>
<p class="ats-caution-text">当店で撮影した猫さんの画像はSNSやブログなどにご使用頂いて結構です。ただし、商用 / 営利目的の場合は必ずご連絡ください。</p>
</div>
</div>
</div>
<div class="ats-separator ats-sep-beige"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-beige">
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">関連サービスの紹介</h2>
<p class="ats-text-center ats-mb-xl">アトリエ高菜先生を運営する超超エリート株式会社・株式会社高菜先生ソーシャルエンタープライズで行っている事業の紹介です。</p>
<div class="ats-cases-grid">
<div class="ats-service-card"><img alt="" class="aligncenter wp-image-4900 size-full" decoding="async" height="720" loading="lazy" src="./assets/img_cfa7edd5.png" width="960"/>
<div class="ats-service-overlay"></div>
<div class="ats-service-content">
<h3 class="ats-service-title">調味料作り体験のご紹介</h3>
<div class="ats-service-desc">
                            当施設の向かいの店舗では薬膳七味作りや山梨名物「すりだね」作り体験などの調味料作り体験も行っています。世界で1つだけの、自分好みの調味料を作ってお持ち帰りいただけます。<br/>
<a href="https://umamilabo.lp-web.net/" class="ats-service-link">VIEW MORE →</a>
</div>
</div>
</div>
<div class="ats-service-card"><img alt="" class="aligncenter wp-image-4901 size-full" decoding="async" height="720" loading="lazy" src="./assets/img_799e9f1f.png" width="960"/>
<div class="ats-service-overlay"></div>
<div class="ats-service-content">
<h3 class="ats-service-title">富士家のご紹介</h3>
<div class="ats-service-desc">
                            当施設向かい店舗「富士家」では山梨の郷土料理「ほうとう」、富士吉田名物「吉田のうどん」、富士山の伏流水で作る「忍野八海蕎麦」など、山梨ならではの料理を作ってお召し上がり頂ける教室を運営しています。<br/>
<a href="https://houtoutaiken.lp-web.net/" class="ats-service-link">VIEW MORE →</a>
</div>
</div>
</div>
<div class="ats-service-card"><img alt="猫カフェ帰りに向かいの富士家で楽しめる約30分の手作り体験" class="aligncenter size-full" decoding="async" height="720" loading="lazy" src="./assets/cafeflow_suridane_couple_workshop.jpg" width="960"/>
<div class="ats-service-overlay"></div>
<div class="ats-service-content">
<h3 class="ats-service-title">カフェタイム体験のご紹介</h3>
<div class="ats-service-desc">
                            猫と過ごした後は、向かいの「富士家」で約30分の手作り体験はいかがですか。七味・すりだね作りや黒蜜きな粉餅・鯛焼き作りなど、自分で作ったおみやげをそのまま持ち帰れます。<br/>
<a href="https://houtoutaiken.lp-web.net/cafe/" class="ats-service-link">VIEW MORE →</a>
</div>
</div>
</div>
</div>
</div>
<div class="ats-separator ats-sep-white"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-white" id="js-ats-intro-story">
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">代表＆高菜先生紹介</h2>
<div class="ats-story-block">
<div class="ats-story-header">
<h3 class="ats-story-name">代表：桑原 淳 <span class="ats-story-name-en">/ JUN KUWABARA</span><br/>
<span class="ats-story-role">超超エリート株式会社 代表取締役<br/>
                            株式会社高菜先生ソーシャルエンタープライズ 代表取締役</span>
</h3>
<p class="ats-story-catch">ハサミ一本で世界を巡り、見えた景色。<br/>
                          「ギブの精神」で孤独のない社会をつくる。</p>
</div>
<div class="ats-story-intro">
<div class="ats-story-icon"><img alt="Jun Kuwabara" decoding="async" src="./assets/b474ed_12_lRkTB0WS_400x400.jpg"/></div>
<p class="ats-story-desc">
                          世界62ヶ国1301人をカットした旅人美容師。帰国後は東京で美容室を開業し、現在は地元山梨を拠点に飲食事業や観光事業を展開。「貧困や生きづらさの原因は孤独にある」という考えのもと、事業を通じて支え合えるコミュニティづくりに挑み続けています。
                        </p>
</div>
<div class="ats-story-grid">
<div class="ats-story-list js-ats-tabs" data-group="jun">
<div class="ats-story-item active" data-target="jun-1">
<h4 class="ats-story-item-title">01. 美容師から世界一周の旅へ</h4>
<p class="ats-story-item-text">
                              山梨県富士吉田市生まれ。都内で美容師として活動後、人生を見つめ直すため退職。22歳で日本縦断と1000人握手の旅を完遂しました。その後「世界中で1000人カットする」という目標を掲げ海外へ。62ヶ国を巡り、1301人のヘアカットを行い書籍化もされました。
                            </p>
<div class="ats-story-sp-img"><img alt="" class="aligncenter wp-image-6049 size-full" decoding="async" height="600" loading="lazy" sizes="auto, (max-width: 600px) 100vw, 600px" src="./assets/9f6efa_15_FB_IMG_1616236432748.jpg" srcset="./assets/9f6efa_15_FB_IMG_1616236432748.jpg 600w, ./assets/6c639e_15_FB_IMG_1616236432748-300x300.jpg 300w, ./assets/b628da_15_FB_IMG_1616236432748-150x150.jpg 150w" width="600"/></div>
</div>
<div class="ats-story-item" data-target="jun-2">
<h4 class="ats-story-item-title">02. 起業、そして地獄からの再起</h4>
<p class="ats-story-item-text">帰国後、資金ゼロの状態から高円寺に美容室「Up to
                              You」を開業。その後山梨での起業に挑戦しますが、コロナ禍による閉業や資金難など、経営者として幾度もの苦難を経験しました。それらを乗り越え、現在は飲食事業や調味料ブランドなどを多角的に展開しています。
                            </p>
<div class="ats-story-sp-img"><img alt="" class="aligncenter size-full wp-image-6055" decoding="async" height="1670" loading="lazy" src="./assets/096237_fb_img_1477881408133-1.jpg" width="980"/></div>
</div>
<div class="ats-story-item" data-target="jun-3">
<h4 class="ats-story-item-title">03. 次世代へ繋ぐコミュニティ作り</h4>
<p class="ats-story-item-text">
                              現在は自身の経験から「孤独の解消」をテーマに活動。子どもの職業体験「キッズアカデミー」や子ども食堂の運営に注力しています。子どもたちへの体験機会の提供はもちろん、そこから生まれる親同士の繋がりを大切にし、地域全体で支え合う社会貢献事業を推進しています。
                            </p>
<div class="ats-story-sp-img"><img alt="コミュニティ作り" decoding="async" src="./assets/ebdc12_466915.jpg"/></div>
</div>
</div>
<div class="ats-story-visual js-ats-visuals" data-group="jun">
<div class="ats-story-img active" id="jun-1"><img alt="" class="aligncenter size-full wp-image-6055" decoding="async" height="1670" loading="lazy" sizes="auto, (max-width: 980px) 100vw, 980px" src="./assets/ae945a_980x1670.png" srcset="./assets/ae945a_980x1670.png 980w, ./assets/aa5f19_980x1670-176x300.png 176w, ./assets/be6855_980x1670-601x1024.png 601w, ./assets/5da72b_980x1670-768x1309.png 768w, ./assets/964929_980x1670-901x1536.png 901w" width="980"/></div>
<div class="ats-story-img" id="jun-2"><img alt="" class="aligncenter size-full wp-image-6049" decoding="async" height="600" loading="lazy" src="./assets/096237_fb_img_1477881408133-1.jpg" width="600"/></div>
<div class="ats-story-img" id="jun-3"><img alt="コミュニティ作り" decoding="async" src="./assets/ebdc12_466915.jpg"/></div>
</div>
</div>
</div>
<div class="ats-story-block">
<div class="ats-story-header">
<h3 class="ats-story-name">高菜先生 <span class="ats-story-name-en">/ Takana-sensei</span><br/>
<span class="ats-story-role">代表取締役猫 / 社会貢献の象徴</span>
</h3>
<p class="ats-story-catch">瀕死だった保護猫が、社会を変える象徴に。<br/>
                          多岐にわたるブランドの顔として活躍。</p>
</div>
<div class="ats-story-intro">
<div class="ats-story-icon"><img alt="高菜先生" decoding="async" src="./assets/c44a22_434124_0.jpg"/></div>
<p class="ats-story-desc">
                          瀕死の状態から奇跡的に回復し、現在は「高菜先生」ブランドの顔として活躍中。自身の名を冠した激辛調味料や店舗の看板を背負い、その売上の一部は保護猫活動などの社会貢献に充てられています。存在そのものが社会を変えるきっかけを作る、わがままボディな猫。
                        </p>
</div>
<div class="ats-story-grid">
<div class="ats-story-list js-ats-tabs" data-group="takana">
<div class="ats-story-item active" data-target="takana-1">
<h4 class="ats-story-item-title">01. 奇跡の生還と名前の由来</h4>
<p class="ats-story-item-text">
                              宮崎県延岡市のスーパー裏で衰弱していたところを保護。高菜漬けの桶に入れられて病院へ運ばれたことから「高菜」と命名されました。その後山梨へ移住。回復後には車中泊での九州一周3000kmの旅にも同行するなど、驚異的な生命力と適応力を持っています。
                            </p>
<div class="ats-story-sp-img"><img alt="奇跡の生還" decoding="async" src="./assets/img_c486861a.jpg"/></div>
</div>
<div class="ats-story-item" data-target="takana-2">
<h4 class="ats-story-item-title">02. ビジネスと社会貢献の象徴</h4>
<p class="ats-story-item-text">
                              現在は「代表取締役猫」として、飲食やアパレルなど様々な事業の公式キャラクターを務めています。高菜先生の知名度が上がることで保護猫活動への関心が高まり、収益が社会課題の解決に還元される仕組みを作っています。
                            </p>
<div class="ats-story-sp-img"><img alt="" class="aligncenter size-full wp-image-5736" decoding="async" height="684" loading="lazy" src="./assets/img_c98760cf.jpg" width="1024"/></div>
</div>
<div class="ats-story-item" data-target="takana-3">
<h4 class="ats-story-item-title">03. アトリエでの日常</h4>
<p class="ats-story-item-text">
                              普段は「アトリエ高菜先生」にて、看板猫としてお客様を迎えています。お昼寝をしながら訪れる人々に癒やしと笑顔を提供し、人と猫、人と人を繋ぐ架け橋として活躍しています。</p>
<div class="ats-story-sp-img"><img alt="" class="aligncenter size-full wp-image-6009" decoding="async" height="1284" loading="lazy" src="./assets/img_e1b15c4e.png" width="1044"/></div>
</div>
</div>
<div class="ats-story-visual js-ats-visuals" data-group="takana">
<div class="ats-story-img active" id="takana-1"><img alt="奇跡の生還" decoding="async" src="./assets/img_c486861a.jpg"/></div>
<div class="ats-story-img" id="takana-2"><img alt="社会貢献の象徴" decoding="async" src="./assets/img_c98760cf.jpg"/></div>
<div class="ats-story-img" id="takana-3"><img alt="アトリエでの日常" decoding="async" src="./assets/img_e1b15c4e.png"/></div>
</div>
</div>
</div>
</div>
<div class="ats-separator ats-sep-wood"><svg height="60" preserveaspectratio="none" viewbox="0 0 1440 60" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="currentColor"></path>
</svg></div>
</div>
<div class="ats-section bg-wood" id="js-ats-access" style="padding-bottom: 60px;">
<div class="ats-container ats-scroll-fade">
<h2 class="ats-title">アクセス</h2>
<div class="ats-access-box">
<div class="ats-map-frame"><iframe allowfullscreen="allowfullscreen" height="100%" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.47413403538!2d138.76583771116321!3d35.49255267253468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601961a90ac1caf3%3A0x3b37c972f43771c2!2z54Sh5paZ44Gu54yr44Kr44OV44Kn44Ki44OI44Oq44Ko6auY6I-c5YWI55Sf!5e0!3m2!1sja!2sin!4v1769896615035!5m2!1sja!2sin" style="border: 0; min-height: 300px; height: 100%;" title="アトリエ高菜先生の地図" width="100%"></iframe>
</div>
<div class="ats-access-info">
<h3 class="ats-access-title">アトリエ高菜先生</h3>
<table class="ats-access-table">
<tbody>
<tr>
<th>住所</th>
<td>〒401-0301 山梨県南都留郡富士河口湖町船津3250-3</td>
</tr>
<tr>
<th>駐車場</th>
<td>無料駐車場有</td>
</tr>
<tr>
<th>予約</th>
<td>不要<br/>
<span style="font-size: 0.9em;">（ほぼ年中無休で営業しておりますが、確実にご利用になりたいという方は事前のお問い合わせをお願い致します。）</span>
</td>
</tr>
<tr>
<th>利用時間</th>
<td>13:00~18:00</td>
</tr>
<tr>
<th>定休日</th>
<td>不定休</td>
</tr>
<tr>
<th>催行人数</th>
<td>1名〜</td>
</tr>
<tr>
<th>最寄駅</th>
<td>富士急行線河口湖駅（徒歩12分）</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div><a class="ats-floating-insta" href="https://www.instagram.com/atelier.takanasensei?utm_source=ig_web_button_share_sheet&amp;igsh=ZDNlZDc0MzIxNw==" rel="noopener noreferrer" target="_blank"><img alt="Instagram" decoding="async" src="./assets/304b8d_instagram.png"/></a></div>
</div>
</div>
</article><!-- [ /#post-5672 ] -->
</div><!-- [ /.mainSection ] -->
</div><!-- [ /.row ] -->
</div><!-- [ /.container ] -->
</div><!-- [ /.siteContent ] -->
<div class="section sectionBox siteContent_after">
<div class="container">
<div class="row">
<div class="col-md-12">
<aside class="widget widget_block widget_text" id="block-2">
<p></p>
</aside>
</div>
</div>
</div>
</div>
<?php include "footer.php"; ?>