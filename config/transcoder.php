<?php
/**
 * Transcoder plugin for Craft CMS 3.x
 *
 * Transcode videos to various formats, and provide thumbnails of the video
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

/**
 * Transcoder config.php
 *
 * This file exists only as a template for the Transcoder settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'transcoder.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [

    // The path to the ffmpeg binary
    'ffmpegPath' => getenv('BIN_PATH') . '/ffmpeg',

    // The path to the ffprobe binary
    'ffprobePath' => getenv('BIN_PATH') . '/ffprobe',

    // The options to use for ffprobe
    'ffprobeOptions' => '-v quiet -print_format json -show_format -show_streams',

    // The path where the transcoded videos are stored; must have a trailing /
    // Yii2 aliases are supported here
    'transcoderPaths' => [
        'default' => '@webroot/assets/transcoder/',
        'video' => '@webroot/assets/transcoder/video/',
        'audio' => '@webroot/assets/transcoder/audio/',
        'thumbnail' => '@webroot/assets/transcoder/thumbnail/',
        'gif' => '@webroot/assets/transcoder/gif/',
    ],
    // The URL where the transcoded videos are stored; must have a trailing /
    // Yii2 aliases are supported here
    'transcoderUrls' => [
        'default' => '@web/assets/transcoder/',
        'video' => '@web/assets/transcoder/video/',
        'audio' => '@web/assets/transcoder/audio/',
        'thumbnail' => '@web/assets/transcoder/thumbnail/',
        'gif' => '@web/assets/transcoder/gif/',
    ],

    // Use a md5 hash for the filenames instead of parameterized naming
    'useHashedNames' => false,

    // Preset video encoders
    'videoEncoders' => [
        'h264' => [
            'fileSuffix' => '.mp4',
            'fileFormat' => 'mp4',
            'videoCodec' => 'libx264',
            'videoCodecOptions' => '-vprofile high -preset slow -crf 22',
            'audioCodec' => 'libfdk_aac',
            'audioCodecOptions' => '-async 1000',
        ],
        'webm' => [
            'fileSuffix' => '.webm',
            'fileFormat' => 'webm',
            'videoCodec' => 'libvpx',
            'videoCodecOptions' => '-quality good -cpu-used 0',
            'audioCodec' => 'libvorbis',
            'audioCodecOptions' => '-async 1000',
        ],
    ],

    // Preset audio encoders
    'audioEncoders' => [
        'mp3' => [
            'fileSuffix' => '.mp3',
            'fileFormat' => 'mp3',
            'audioCodec' => 'libmp3lame',
            'audioCodecOptions' => '',
        ],
        'aac' => [
            'fileSuffix' => '.m4a',
            'fileFormat' => 'aac',
            'audioCodec' => 'libfdk_aac',
            'audioCodecOptions' => '',

        ],
        'ogg' => [
            'fileSuffix' => '.ogg',
            'fileFormat' => 'ogg',
            'audioCodec' => 'libvorbis',
            'audioCodecOptions' => '',
        ],
    ],

    // Default options for encoded videos
    'defaultVideoOptions' => [
        // Video settings
        'videoEncoder' => 'h264',
        'videoBitRate' => '800k',
        'videoFrameRate' => 15,
        // Audio settings
        'audioBitRate' => '',
        'audioSampleRate' => '',
        'audioChannels' => '',
        // Spatial settings
        'width' => '',
        'height' => '',
        'sharpen' => true,
        // Can be 'none', 'crop', or 'letterbox'
        'aspectRatio' => 'letterbox',
        'letterboxColor' => '',
    ],

    // Default options for video thumbnails
    'defaultThumbnailOptions' => [
        'fileSuffix' => '.jpg',
        'timeInSecs' => 10,
        'width' => '',
        'height' => '',
        'sharpen' => true,
        // Can be 'none', 'crop', or 'letterbox'
        'aspectRatio' => 'letterbox',
        'letterboxColor' => '',
    ],

    // Default options for encoded videos
    'defaultAudioOptions' => [
        'audioEncoder' => 'mp3',
        'audioBitRate' => '128k',
        'audioSampleRate' => '44100',
        'audioChannels' => '2',
    ],

];