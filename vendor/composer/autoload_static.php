<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fdc4f4ccf050299da1bb89e3ef115b8
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'LeagueWrap' => 
            array (
                0 => __DIR__ . '/..' . '/league-php/leaguewrap/src',
            ),
        ),
    );

    public static $classMap = array (
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'LeagueWrap\\Api' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api.php',
        'LeagueWrap\\Api\\AbstractApi' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/AbstractApi.php',
        'LeagueWrap\\Api\\Champion' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Champion.php',
        'LeagueWrap\\Api\\Championmastery' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Championmastery.php',
        'LeagueWrap\\Api\\ConfigTrait' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/ConfigTrait.php',
        'LeagueWrap\\Api\\Currentgame' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Currentgame.php',
        'LeagueWrap\\Api\\Featuredgames' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Featuredgames.php',
        'LeagueWrap\\Api\\Game' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Game.php',
        'LeagueWrap\\Api\\League' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/League.php',
        'LeagueWrap\\Api\\Match' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Match.php',
        'LeagueWrap\\Api\\Matchlist' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Matchlist.php',
        'LeagueWrap\\Api\\Staticdata' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Staticdata.php',
        'LeagueWrap\\Api\\Stats' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Stats.php',
        'LeagueWrap\\Api\\Status' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Status.php',
        'LeagueWrap\\Api\\Summoner' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Summoner.php',
        'LeagueWrap\\Api\\Team' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Api/Team.php',
        'LeagueWrap\\Cache' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Cache.php',
        'LeagueWrap\\CacheInterface' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/CacheInterface.php',
        'LeagueWrap\\Client' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Client.php',
        'LeagueWrap\\ClientInterface' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/ClientInterface.php',
        'LeagueWrap\\Dto\\AbstractDto' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/AbstractDto.php',
        'LeagueWrap\\Dto\\AbstractListDto' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/AbstractListDto.php',
        'LeagueWrap\\Dto\\AggregateStats' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/AggregateStats.php',
        'LeagueWrap\\Dto\\Ban' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Ban.php',
        'LeagueWrap\\Dto\\Champion' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Champion.php',
        'LeagueWrap\\Dto\\ChampionList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/ChampionList.php',
        'LeagueWrap\\Dto\\ChampionMastery' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/ChampionMastery.php',
        'LeagueWrap\\Dto\\ChampionMasteryList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/ChampionMasteryList.php',
        'LeagueWrap\\Dto\\ChampionStats' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/ChampionStats.php',
        'LeagueWrap\\Dto\\CurrentGame' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/CurrentGame.php',
        'LeagueWrap\\Dto\\CurrentGameParticipant' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/CurrentGameParticipant.php',
        'LeagueWrap\\Dto\\FeaturedGames' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/FeaturedGames.php',
        'LeagueWrap\\Dto\\Game' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Game.php',
        'LeagueWrap\\Dto\\ImportStaticTrait' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/ImportStaticTrait.php',
        'LeagueWrap\\Dto\\Incident' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Incident.php',
        'LeagueWrap\\Dto\\League' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/League.php',
        'LeagueWrap\\Dto\\LeagueEntry' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/LeagueEntry.php',
        'LeagueWrap\\Dto\\Mastery' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Mastery.php',
        'LeagueWrap\\Dto\\MasteryPage' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/MasteryPage.php',
        'LeagueWrap\\Dto\\Match' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Match.php',
        'LeagueWrap\\Dto\\MatchList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/MatchList.php',
        'LeagueWrap\\Dto\\MatchReference' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/MatchReference.php',
        'LeagueWrap\\Dto\\MatchTeam' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/MatchTeam.php',
        'LeagueWrap\\Dto\\MatchTimeline' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/MatchTimeline.php',
        'LeagueWrap\\Dto\\Message' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Message.php',
        'LeagueWrap\\Dto\\MiniSeries' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/MiniSeries.php',
        'LeagueWrap\\Dto\\Observer' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Observer.php',
        'LeagueWrap\\Dto\\Participant' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Participant.php',
        'LeagueWrap\\Dto\\ParticipantIdentity' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/ParticipantIdentity.php',
        'LeagueWrap\\Dto\\ParticipantTimeline' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/ParticipantTimeline.php',
        'LeagueWrap\\Dto\\Player' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Player.php',
        'LeagueWrap\\Dto\\PlayerStatsSummary' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/PlayerStatsSummary.php',
        'LeagueWrap\\Dto\\PlayerStatsSummaryList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/PlayerStatsSummaryList.php',
        'LeagueWrap\\Dto\\RankedStats' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/RankedStats.php',
        'LeagueWrap\\Dto\\RecentGames' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/RecentGames.php',
        'LeagueWrap\\Dto\\Rune' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Rune.php',
        'LeagueWrap\\Dto\\RunePage' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/RunePage.php',
        'LeagueWrap\\Dto\\Service' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Service.php',
        'LeagueWrap\\Dto\\Shard' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Shard.php',
        'LeagueWrap\\Dto\\ShardList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/ShardList.php',
        'LeagueWrap\\Dto\\ShardStatus' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/ShardStatus.php',
        'LeagueWrap\\Dto\\StaticData\\BasicData' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/BasicData.php',
        'LeagueWrap\\Dto\\StaticData\\BasicDataStats' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/BasicDataStats.php',
        'LeagueWrap\\Dto\\StaticData\\Block' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Block.php',
        'LeagueWrap\\Dto\\StaticData\\BlockItem' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/BlockItem.php',
        'LeagueWrap\\Dto\\StaticData\\Champion' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Champion.php',
        'LeagueWrap\\Dto\\StaticData\\ChampionList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/ChampionList.php',
        'LeagueWrap\\Dto\\StaticData\\ChampionSpell' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/ChampionSpell.php',
        'LeagueWrap\\Dto\\StaticData\\Gold' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Gold.php',
        'LeagueWrap\\Dto\\StaticData\\Group' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Group.php',
        'LeagueWrap\\Dto\\StaticData\\Image' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Image.php',
        'LeagueWrap\\Dto\\StaticData\\Info' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Info.php',
        'LeagueWrap\\Dto\\StaticData\\Item' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Item.php',
        'LeagueWrap\\Dto\\StaticData\\ItemList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/ItemList.php',
        'LeagueWrap\\Dto\\StaticData\\ItemTree' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/ItemTree.php',
        'LeagueWrap\\Dto\\StaticData\\LevelTip' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/LevelTip.php',
        'LeagueWrap\\Dto\\StaticData\\Mastery' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Mastery.php',
        'LeagueWrap\\Dto\\StaticData\\MasteryList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/MasteryList.php',
        'LeagueWrap\\Dto\\StaticData\\MasteryTree' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/MasteryTree.php',
        'LeagueWrap\\Dto\\StaticData\\MasteryTreeItem' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/MasteryTreeItem.php',
        'LeagueWrap\\Dto\\StaticData\\MasteryTreeList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/MasteryTreeList.php',
        'LeagueWrap\\Dto\\StaticData\\MetaData' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/MetaData.php',
        'LeagueWrap\\Dto\\StaticData\\Passive' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Passive.php',
        'LeagueWrap\\Dto\\StaticData\\Realm' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Realm.php',
        'LeagueWrap\\Dto\\StaticData\\Recommended' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Recommended.php',
        'LeagueWrap\\Dto\\StaticData\\Rune' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Rune.php',
        'LeagueWrap\\Dto\\StaticData\\RuneList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/RuneList.php',
        'LeagueWrap\\Dto\\StaticData\\Skin' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Skin.php',
        'LeagueWrap\\Dto\\StaticData\\SpellVar' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/SpellVar.php',
        'LeagueWrap\\Dto\\StaticData\\Stats' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/Stats.php',
        'LeagueWrap\\Dto\\StaticData\\SummonerSpell' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/SummonerSpell.php',
        'LeagueWrap\\Dto\\StaticData\\SummonerSpellList' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/StaticData/SummonerSpellList.php',
        'LeagueWrap\\Dto\\Stats' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Stats.php',
        'LeagueWrap\\Dto\\Summoner' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Summoner.php',
        'LeagueWrap\\Dto\\Team' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Team.php',
        'LeagueWrap\\Dto\\Team\\Match' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Team/Match.php',
        'LeagueWrap\\Dto\\Team\\Member' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Team/Member.php',
        'LeagueWrap\\Dto\\Team\\Roster' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Team/Roster.php',
        'LeagueWrap\\Dto\\TimelineFrame' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/TimelineFrame.php',
        'LeagueWrap\\Dto\\TimelineFrameEvent' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/TimelineFrameEvent.php',
        'LeagueWrap\\Dto\\TimelineParticipantFrame' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/TimelineParticipantFrame.php',
        'LeagueWrap\\Dto\\Translation' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Dto/Translation.php',
        'LeagueWrap\\Exception\\ApiClassNotFoundException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/ApiClassNotFoundException.php',
        'LeagueWrap\\Exception\\ApiNotLoadedException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/ApiNotLoadedException.php',
        'LeagueWrap\\Exception\\BaseUrlException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/BaseUrlException.php',
        'LeagueWrap\\Exception\\CacheNotFoundException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/CacheNotFoundException.php',
        'LeagueWrap\\Exception\\InvalidIdentityException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/InvalidIdentityException.php',
        'LeagueWrap\\Exception\\LimitReachedException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/LimitReachedException.php',
        'LeagueWrap\\Exception\\ListKeyNotSetException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/ListKeyNotSetException.php',
        'LeagueWrap\\Exception\\ListMaxException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/ListMaxException.php',
        'LeagueWrap\\Exception\\NoKeyException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/NoKeyException.php',
        'LeagueWrap\\Exception\\NoResponseIncludedException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/NoResponseIncludedException.php',
        'LeagueWrap\\Exception\\NoValidLimitInterfaceException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/NoValidLimitInterfaceException.php',
        'LeagueWrap\\Exception\\RegionException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Exception/RegionException.php',
        'LeagueWrap\\LimitInterface' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/LimitInterface.php',
        'LeagueWrap\\Limit\\Collection' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Limit/Collection.php',
        'LeagueWrap\\Limit\\FileLimit' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Limit/FileLimit.php',
        'LeagueWrap\\Limit\\Limit' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Limit/Limit.php',
        'LeagueWrap\\Region' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Region.php',
        'LeagueWrap\\Response' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response.php',
        'LeagueWrap\\Response\\Http400' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http400.php',
        'LeagueWrap\\Response\\Http401' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http401.php',
        'LeagueWrap\\Response\\Http402' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http402.php',
        'LeagueWrap\\Response\\Http403' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http403.php',
        'LeagueWrap\\Response\\Http404' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http404.php',
        'LeagueWrap\\Response\\Http405' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http405.php',
        'LeagueWrap\\Response\\Http406' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http406.php',
        'LeagueWrap\\Response\\Http407' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http407.php',
        'LeagueWrap\\Response\\Http408' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http408.php',
        'LeagueWrap\\Response\\Http429' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http429.php',
        'LeagueWrap\\Response\\Http500' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http500.php',
        'LeagueWrap\\Response\\Http501' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http501.php',
        'LeagueWrap\\Response\\Http502' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http502.php',
        'LeagueWrap\\Response\\Http503' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http503.php',
        'LeagueWrap\\Response\\Http504' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http504.php',
        'LeagueWrap\\Response\\Http505' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/Http505.php',
        'LeagueWrap\\Response\\HttpClientError' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/HttpClientError.php',
        'LeagueWrap\\Response\\HttpServerError' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/HttpServerError.php',
        'LeagueWrap\\Response\\ResponseException' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/ResponseException.php',
        'LeagueWrap\\Response\\UnderlyingServiceRateLimitReached' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/Response/UnderlyingServiceRateLimitReached.php',
        'LeagueWrap\\StaticApi' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticApi.php',
        'LeagueWrap\\StaticOptimizer' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticOptimizer.php',
        'LeagueWrap\\StaticProxy\\AbstractStaticProxy' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticProxy/AbstractStaticProxy.php',
        'LeagueWrap\\StaticProxy\\StaticApi' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticProxy/StaticApi.php',
        'LeagueWrap\\StaticProxy\\StaticChampion' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticProxy/StaticChampion.php',
        'LeagueWrap\\StaticProxy\\StaticGame' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticProxy/StaticGame.php',
        'LeagueWrap\\StaticProxy\\StaticLeague' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticProxy/StaticLeague.php',
        'LeagueWrap\\StaticProxy\\StaticStaticData' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticProxy/StaticStaticData.php',
        'LeagueWrap\\StaticProxy\\StaticStats' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticProxy/StaticStats.php',
        'LeagueWrap\\StaticProxy\\StaticSummoner' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticProxy/StaticSummoner.php',
        'LeagueWrap\\StaticProxy\\StaticTeam' => __DIR__ . '/..' . '/league-php/leaguewrap/src/LeagueWrap/StaticProxy/StaticTeam.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fdc4f4ccf050299da1bb89e3ef115b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fdc4f4ccf050299da1bb89e3ef115b8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2fdc4f4ccf050299da1bb89e3ef115b8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2fdc4f4ccf050299da1bb89e3ef115b8::$classMap;

        }, null, ClassLoader::class);
    }
}
