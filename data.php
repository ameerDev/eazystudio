<?php
// data.php

// Meta data
$pageData = [
    "pageTitle" => "Free Online File Compressor Tools | Optimize Media & Docs | EazyStudio",
    "metaDescription" => "Suggested Description Find the best free online tools for file compression, optimization, and web development at EazyStudio. Compress images, videos, audio, and documents easily.",
    "metaKeywords" => "Free Online File Compressor Tools, Image Compressor, Video Compressor, Audio Compressor, Image Optimization, Video Optimization",
    "canonicalUrl" => "https://www.eazystudio.com",
    "author" => "Mohammad Ameer"
];

// Hot Tools
$hot_tools = [
    [
        'name' => 'Video Compression',
        'description' => 'Compress video files without quality loss',
        'icon' => '/assets/icons/video-compress.svg',
        'link' => '/video-compressor/'
    ],
    [
        'name' => 'Image Compression',
        'description' => 'Reduce image sizes while keeping high visual quality',
        'icon' => '/assets/icons/image-compress.svg',
        'link' => '/image-compressor/'
    ],
    [
        'name' => 'Audio Compression',
        'description' => 'Shrink audio files with minimal quality impact',
        'icon' => '/assets/icons/audio-compress.svg',
        'link' => '/audio-compress/'
    ],
];

// Navigation links
$navLinks = [
    [
        "name" => "Home",
        "url" => "https://www.eazystudio.com",
        "dropdown" => false
    ],
    [
        "name" => "AI Tools",
        "url" => "#",
        "dropdown" => true,
        "items" => [
          ["name" => "AI Image Upscaler", "url" => "https://www.eazystudio.com/ai-image-upscaler/", "icon" => "fas fa-expand"],

            ["name" => "AI Image Editor", "url" => "https://www.eazystudio.com/ai-image-editor/", "icon" => "fas fa-image"],
            ["name" => "Image Cropper", "url" => "https://www.eazystudio.com/image-cropper", "icon" => "fas fa-crop"],
            ["name" => "Remove Background", "url" => "https://www.eazystudio.com/bg-remove/", "icon" => "fas fa-eraser"],
            ["name" => "Text To Image", "url" => "https://www.eazystudio.com/text-to-image/", "icon" => "fas fa-image"],
        ]
    ],
    [
        "name" => "Images",
        "url" => "#",
        "dropdown" => true,
        "items" => [
          
            ["name" => "Image Compressor", "url" => "https://www.eazystudio.com/image-compressor/", "icon" => "fas fa-image"],
            ["name" => "Texture Packer", "url" => "https://www.eazystudio.com/texture-packer/", "icon" => "fas fa-th-large"],
            ["name" => "Image Format Changer", "url" => "https://www.eazystudio.com/image-format/", "icon" => "fas fa-exchange-alt"],
            // ["name" => "Image Resizer", "url" => "https://www.eazystudio.com/image-resizer/", "icon" => "fas fa-expand"],
            ["name" => "Favicon Generator", "url" => "https://www.eazystudio.com/favicon-generator/", "icon" => "fas fa-icons"],
            ["name" => "Image Cropper", "url" => "https://www.eazystudio.com/image-cropper", "icon" => "fas fa-crop"],
            ["name" => "Remove Background", "url" => "https://www.eazystudio.com/bg-remove/", "icon" => "fas fa-eraser"],
            ["name" => "Image Watermark Tool", "url" => "https://www.eazystudio.com/image-watermark/", "icon" => "fas fa-stamp"],
            ["name" => "Color Palette Generator", "url" => "https://www.eazystudio.com/color-palette-generator/", "icon" => "fas fa-palette"],
            ["name" => "QR Code Generator", "url" => "https://www.eazystudio.com/qr-code-generator/", "icon" => "fas fa-qrcode"]
        ]
    ],
	[
      "name" => "Video",
      "url" => "#",
      "dropdown" => true,
      "items" => [
        ["name" => "Video Compressor", "url" => "https://www.eazystudio.com/video-compressor/", "icon" => "fas fa-video"],
        ["name" => "Video to Audio Converter", "url" => "https://www.eazystudio.com/video-to-audio/", "icon" => "fas fa-file-audio"],
        ["name" => "Video Editor", "url" => "https://www.eazystudio.com/video-editor/", "icon" => "fas fa-film"]
      ]
    ],
    [
      "name" => "Audio",
      "url" => "#",
      "dropdown" => true,
      "items" => [
        ["name" => "Audio Sprite Generator", "url" => "https://www.eazystudio.com/audio-sprite-generator/", "icon" => "fas fa-music"],
        ["name" => "Audio Compressor", "url" => "https://www.eazystudio.com/audio-compress/", "icon" => "fas fa-volume-down"],
        ["name" => "Audio Format Changer", "url" => "https://www.eazystudio.com/audio-format-converter/", "icon" => "fas fa-exchange-alt"],
        ["name" => "Audio Crop", "url" => "https://www.eazystudio.com/audio-crop/", "icon" => "fas fa-cut"]
      ]
    ],
    
    [
      "name" => "Developer",
      "url" => "#",
      "dropdown" => true,
      "items" => [
        ["name" => "JSON Viewer", "url" => "https://www.eazystudio.com/json-viewer/", "icon" => "fas fa-code"],
        ["name" => "Code Minifier", "url" => "https://www.eazystudio.com/code-minify/", "icon" => "fas fa-file-code"],
        ["name" => "Web Postman", "url" => "https://www.eazystudio.com/postman/", "icon" => "fas fa-share-alt"],
        ["name" => "JWT Secret KeyGen", "url" => "https://www.eazystudio.com/jwt-secret-generator/", "icon" => "fas fa-key"],
        ["name" => "JWT Token Decoder", "url" => "https://www.eazystudio.com/jwt-decoder/", "icon" => "fas fa-key"],
        ["name" => "Multi Device Preview Tool", "url" => "https://www.eazystudio.com/device-preview-tool", "icon" => "fas fa-mobile-alt"],
        ["name" => "Website Performance Analyzer", "url" => "https://www.eazystudio.com/web-performance-analyzer/", "icon" => "fas fa-tachometer-alt"]
      ]
    ],
    
	[
      "name" => "Fonts",
      "url" => "#",
      "dropdown" => true,
      "items" => [
        ["name" => "Pixi Text Style Editor", "url" => "https://www.eazystudio.com/pixi/", "icon" => "fas fa-font"],
        ["name" => "Bitmap Font Generator", "url" => "https://www.eazystudio.com/bitmap-generator/", "icon" => "fas fa-text-height"],
        ["name" => "Bitmap Fonts Preview", "url" => "https://www.eazystudio.com/bitmap-preview/", "icon" => "fas fa-eye"],
        ["name" => "Font Converter", "url" => "https://www.eazystudio.com/font-converter/", "icon" => "fas fa-exchange-alt"]
      ]
    ],
    [
      "name" => "Others",
      "url" => "#",
      "dropdown" => true,
      "items" => [
        ["name" => "Indian Income Tax Calculator", "url" => "https://www.eazystudio.com/tax/", "icon" => "fas fa-calculator"],
        ["name" => "What is My IP Address?", "url" => "https://www.eazystudio.com/whatismyip/", "icon" => "fas fa-globe"],
        ["name" => "Check Internet Speed", "url" => "https://www.eazystudio.com/check-internet-speed/", "icon" => "fas fa-tachometer-alt"],
        ["name" => "Check IP Address GEO Location", "url" => "https://www.eazystudio.com/geo-location/", "icon" => "fas fa-map-marker-alt"]
      ]
    ]
];

// Categories and tools
$categories = [
  /*
  [
        "name" => "AI Tools",
        "url" => "#",
        "dropdown" => true,
        "items" => [
          ["name" => "AI Image Upscaler", "url" => "https://www.eazystudio.com/ai-image-upscaler/", "icon" => "fas fa-expand"],

            ["name" => "AI Image Editor", "url" => "https://www.eazystudio.com/ai-image-editor/", "icon" => "fas fa-image"],
            ["name" => "Image Cropper", "url" => "https://www.eazystudio.com/image-crop", "icon" => "fas fa-crop"],
            ["name" => "Remove Background", "url" => "https://www.eazystudio.com/bg-remove/", "icon" => "fas fa-eraser"],
            ["name" => "Text To Image", "url" => "https://www.eazystudio.com/text-to-image/", "icon" => "fas fa-image"],
        ]
    ],
  */
    "aitools" => [
        "title" => "AI Tools",
        "description" => "AI Tools",
        "tools" => [
            [
                "title" => "AI Image Upscaler",
                "description" => "AI based image quality and pixels enhancer. Supports JPG, PNG, and WebP formats.",
                "link" => "https://www.eazystudio.com/ai-image-upscaler/",
                "icon" => "fas fa-expand"
            ],
            [
                "title" => "AI Image Editor",
                "description" => "AI based image quality and pixels enhancer. Supports JPG, PNG, and WebP formats.",
                "link" => "https://www.eazystudio.com/ai-image-editor/",
                "icon" => "fas fa-image"
            ],
            [
            "title" => "Image Cropper",
            "description" => "Crop images to specific dimensions or aspect ratios for perfect presentation.",
            "link" => "https://www.eazystudio.com/image-cropper",
            "icon" => "fas fa-crop"
            ],
            [
            "title" => "Remove Background",
            "description" => "Automatically remove backgrounds from images with AI-powered technology.",
            "link" => "https://www.eazystudio.com/bg-remove/",
            "icon" => "fas fa-eraser"
          ],

          ]
    ],

    "images" => [
        "title" => "Image Tools",
        "description" => "Optimize and manipulate images for web and mobile applications",
        "tools" => [
          [
                "title" => "AI Image Upscaler",
                "description" => "AI based image quality and pixels enhancer. Supports JPG, PNG, and WebP formats.",
                "link" => "https://www.eazystudio.com/ai-image-upscaler/",
                "icon" => "fas fa-expand"
            ],
            [
                "title" => "AI Image Editor",
                "description" => "AI based image quality and pixels enhancer. Supports JPG, PNG, and WebP formats.",
                "link" => "https://www.eazystudio.com/ai-image-editor/",
                "icon" => "fas fa-image"
            ],
            [
                "title" => "Image Compressor",
                "description" => "Reduce image file sizes by up to 80% while maintaining visual quality. Supports JPG, PNG, and WebP formats.",
                "link" => "https://www.eazystudio.com/image-compressor/",
                "icon" => "fas fa-image"
            ],
            [
            "title" => "Texture Packer",
            "description" => "Merge multiple images into a single spritesheet for game development and web optimization.",
            "link" => "https://www.eazystudio.com/texture-packer/",
            "icon" => "fas fa-th-large"
          ],
          [
            "title" => "Image Format Changer",
            "description" => "Convert between JPG, PNG, WebP, and other image formats with just a few clicks.",
            "link" => "https://www.eazystudio.com/image-format/",
            "icon" => "fas fa-exchange-alt"
          ],
          // [
          //   "title" => "Image Resizer",
          //   "description" => "Resize images to exact dimensions or scale them proportionally for different devices.",
          //   "link" => "https://www.eazystudio.com/image-resizer/",
          //   "icon" => "fas fa-expand"
          // ],
          [
            "title" => "Favicon Generator",
            "description" => "Create favicons in multiple sizes from your logo or image for all browsers and devices.",
            "link" => "https://www.eazystudio.com/favicon-generator/",
            "icon" => "fas fa-icons"
          ],
          [
            "title" => "Image Cropper",
            "description" => "Crop images to specific dimensions or aspect ratios for perfect presentation.",
            "link" => "https://www.eazystudio.com/image-cropper",
            "icon" => "fas fa-crop"
          ],
          [
            "title" => "Remove Background",
            "description" => "Automatically remove backgrounds from images with AI-powered technology.",
            "link" => "https://www.eazystudio.com/bg-remove/",
            "icon" => "fas fa-eraser"
          ],
            [
                "title" => "Color Palette Generator",
                "description" => "Extract dominant colors from an image to create a color palette for design projects.",
                "link" => "https://www.eazystudio.com/color-palette-generator/",
                "icon" => "fas fa-palette",
                "og_image" => "https://www.eazystudio.com/assets/images/color-palette-generator-og.jpg"
            ],
            [
                "title" => "Image Watermark Tool",
                "description" => "Add text or logo watermarks to images for branding or copyright protection.",
                "link" => "https://www.eazystudio.com/image-watermark/",
                "icon" => "fas fa-stamp",
                "og_image" => "https://www.eazystudio.com/assets/images/image-watermark-og.jpg"
            ],
            [
                "title" => "QR Code Generator",
                "description" => "Create customizable QR codes for URLs, text, or contact info with adjustable size and colors.",
                "link" => "https://www.eazystudio.com/qr-code-generator/",
                "icon" => "fas fa-qrcode",
                "og_image" => "https://www.eazystudio.com/assets/images/qr-code-generator-og.jpg"
            ]
        ]
    ],
	"video" => [
        "title" => "Video Tools",
        "description" => "Optimize and convert video files for web and mobile applications",
        "tools" => [
            [
            "title" => "Video Compressor",
            "description" => "Reduce video file sizes without noticeable quality loss. Supports MP4, MOV, and other formats.",
            "link" => "https://www.eazystudio.com/video-compressor/",
            "icon" => "fas fa-video"
          ],
          [
            "title" => "Video to Audio Converter",
            "description" => "Extract audio from video files and convert to MP3, WAV, or other audio formats.",
            "link" => "https://www.eazystudio.com/video-to-audio/",
            "icon" => "fas fa-file-audio"
          ]
        ]
    ],
    "audio" => [
        "title" => "Audio Tools",
        "description" => "Optimize and manipulate audio files for web and mobile applications",
        "tools" => [
            [
            "title" => "Audio Sprite Generator",
            "description" => "Combine multiple audio files into a single sprite for efficient web game development.",
            "link" => "https://www.eazystudio.com/audio-sprite-generator/",
            "icon" => "fas fa-music"
          ],
          [
            "title" => "Audio Compressor",
            "description" => "Reduce audio file sizes while maintaining sound quality. Supports MP3, WAV, and other formats.",
            "link" => "https://www.eazystudio.com/audio-compress/",
            "icon" => "fas fa-volume-down"
          ],
          [
            "title" => "Audio Format Changer",
            "description" => "Convert between MP3, WAV, M4A and other audio formats with high quality output.",
            "link" => "https://www.eazystudio.com/audio-format-converter/",
            "icon" => "fas fa-exchange-alt"
          ],
          [
            "title" => "Audio Crop",
            "description" => "Trim and crop audio files to specific lengths or remove unwanted sections.",
            "link" => "https://www.eazystudio.com/audio-crop/",
            "icon" => "fas fa-cut"
          ]
        ]
    ],
    
	"developer" => [
        "title" => "Developer Tools",
        "description" => "Essential utilities for web developers and programmers",
        "tools" => [
            [
            "title" => "JSON Viewer",
            "description" => "Visualize and format JSON data for easy debugging and analysis.",
            "link" => "https://www.eazystudio.com/json-viewer/",
            "icon" => "fas fa-code"
          ],
          [
            "title" => "Code Minifier",
            "description" => "Minify HTML, CSS, and JavaScript code for production deployment.",
            "link" => "https://www.eazystudio.com/code-minify/",
            "icon" => "fas fa-file-code"
          ],
          [
            "title" => "Web Postman",
            "description" => "Test APIs and debug HTTP requests directly in your browser.",
            "link" => "https://www.eazystudio.com/postman/",
            "icon" => "fas fa-share-alt"
          ],
          [
            "title" => "JWT Secret KeyGen",
            "description" => "Generate secure JWT secret keys for authentication systems.",
            "link" => "https://www.eazystudio.com/jwt-secret-generator/",
            "icon" => "fas fa-key"
          ],
          [
            "title" => "JWT Token Decoder",
            "description" => "Decode and inspect JWT tokens to verify their contents.",
            "link" => "https://www.eazystudio.com/jwt-decoder/",
            "icon" => "fas fa-key"
          ],
          [
            "title" => "Multi Device Preview",
            "description" => "Preview your website on multiple device screens simultaneously.",
            "link" => "https://www.eazystudio.com/device-preview-tool",
            "icon" => "fas fa-mobile-alt"
          ],
          [
            "title" => "Performance Analyzer",
            "description" => "Analyze website performance metrics and get optimization suggestions.",
            "link" => "https://www.eazystudio.com/web-performance-analyzer",
            "icon" => "fas fa-tachometer-alt"
          ]
        ]
    ],
	"fonts" => [
        "title" => "Font Tools",
        "description" => "Tools for working with web fonts and optimizing typography",
        "tools" => [
            [
            "title" => "Pixi Text Style Editor",
            "description" => "Create and edit text styles for PixiJS applications with real-time preview.",
            "link" => "https://www.eazystudio.com/pixi/",
            "icon" => "fas fa-font"
          ],
          [
            "title" => "Bitmap Font Generator",
            "description" => "Generate bitmap fonts from system fonts for use in game development.",
            "link" => "https://www.eazystudio.com/bitmap-generator/",
            "icon" => "fas fa-text-height"
          ],
          [
            "title" => "Bitmap Fonts Preview",
            "description" => "Preview bitmap fonts before using them in your projects.",
            "link" => "https://www.eazystudio.com/bitmap-preview/",
            "icon" => "fas fa-eye"
          ],
          [
            "title" => "Font Converter",
            "description" => "Convert fonts between TTF, WOFF, WOFF2 and other formats for web use.",
            "link" => "https://www.eazystudio.com/font-converter/",
            "icon" => "fas fa-exchange-alt"
          ]
        ]
    ],
	
  "others" => [
        "title" => "Others Tools",
        "description" => "Miscellaneous utilities for various needs",
        "tools" => [
            [
            "title" => "Tax Calculator",
            "description" => "Calculate your income tax based on Indian tax laws and regulations.",
            "link" => "https://www.eazystudio.com/tax/",
            "icon" => "fas fa-calculator"
          ],
          [
            "title" => "IP Address Checker",
            "description" => "Check your public IP address and location information.",
            "link" => "https://www.eazystudio.com/whatismyip/",
            "icon" => "fas fa-globe"
          ],
          [
            "title" => "Speed Test",
            "description" => "Test your internet connection speed and performance metrics.",
            "link" => "https://www.eazystudio.com/check-internet-speed/",
            "icon" => "fas fa-tachometer-alt"
          ],
          [
            "title" => "GEO Location",
            "description" => "Find the geographical location of any IP address.",
            "link" => "https://www.eazystudio.com/geo-location/",
            "icon" => "fas fa-map-marker-alt"
          ]
        ]
    ],
];
