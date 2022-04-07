<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Home | kritinayar.com</title>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500|Montserrat:regular|Lato:regular" rel="stylesheet" type="text/css" />
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" media="all" />

        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />

        <style>
            @font-face {
                font-family: 'Sign Style';
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/SignStyle.eot');
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/SignStyle.eot?#iefix') format('embedded-opentype'),
                    url('<?php echo get_template_directory_uri(); ?>/fonts/SignStyle.woff2') format('woff2'),
                    url('<?php echo get_template_directory_uri(); ?>/fonts/SignStyle.woff') format('woff'),
                    url('<?php echo get_template_directory_uri(); ?>/fonts/SignStyle.ttf') format('truetype'),
                    url('<?php echo get_template_directory_uri(); ?>/fonts/SignStyle.svg#SignStyle') format('svg');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }
            @font-face {
                font-family: Comm Sans SemiBold;
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/commuterssans-semibold.woff');
            }

            @font-face {
                font-family: Made Mirage Regular;
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/made_mirage_regular-webfont.woff');
            }

            @font-face {
                font-family: Segatha;
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/segatha.woff');
            }

            @font-face {
                font-family: MADE Mirage Medium;
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/made_mirage_medium_personal_use.woff');
            }

            @font-face {
                font-family: Commuters Semi;
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/commuterssans-semibold.woff');
            }

            @font-face {
                font-family: Adobe Garamond Pro Italic;
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/agaramondpro-italic_gdi.woff');
            }

            @font-face {
                font-family: Made Mirage Thin;
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/made_mirage_thin-webfont.woff');
            }

            @font-face {
                font-family: Commuters Regular;
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/commuterssans-regular.woff');
            }
            @font-face {
                font-family: 'aslsicons2';
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/icons2.eot');
                src: url('<?php echo get_template_directory_uri(); ?>/fonts/icons2.eot?#iefix') format('embedded-opentype'), url('<?php echo get_template_directory_uri(); ?>/fonts/icons2.woff2') format('woff2'), url('<?php echo get_template_directory_uri(); ?>/fonts/icons2.woff') format('woff'), url('<?php echo get_template_directory_uri(); ?>/fonts/icons2.ttf') format('truetype'), url('<?php echo get_template_directory_uri(); ?>/fonts/icons2.svg#icons') format('svg');
                font-weight: normal;
                font-style: normal;
            }
        </style>
        
        <!-- <script id="init_data" type="application/json">
            {
                "mobile": {
                    "w": 320,
                    "defaultTrIn": {
                        "type": "fade"
                    },
                    "defaultTrOut": {
                        "type": "fade"
                    },
                    "background": {
                        "type": "color",
                        "color": "colors-7"
                    }
                },
                "desktop": {
                    "w": 1200,
                    "defaultTrIn": {
                        "type": "fade"
                    },
                    "defaultTrOut": {
                        "type": "fade"
                    },
                    "background": {
                        "type": "color",
                        "color": "colors-7"
                    }
                },
                "sid": "oanf0hcbq1-v3f0xgwf5rq",
                "break": 768,
                "assetURL": "https://static.showit.co",
                "contactFormId": "106069/225100",
                "cfAction": "aHR0cHM6Ly9jbGllbnRzZXJ2aWNlLnNob3dpdC5jby9jb250YWN0Zm9ybQ==",
                "sgAction": "aHR0cHM6Ly9jbGllbnRzZXJ2aWNlLnNob3dpdC5jby9zb2NpYWxncmlk",
                "blockData": [{
                    "slug": "sticky-menu-open",
                    "visible": "d",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 500,
                        "background": {
                            "type": "color",
                            "color": "colors-2"
                        },
                        "locking": {
                            "side": "t",
                            "offset": 0
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 661,
                        "background": {
                            "type": "none",
                            "color": "colors-7"
                        },
                        "locking": {
                            "offset": 0,
                            "side": "t"
                        },
                        "nature": "wH",
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "sticky-menu-closed",
                    "visible": "d",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 40,
                        "background": {
                            "type": "none",
                            "color": "colors-0"
                        },
                        "locking": {
                            "side": "t"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 750,
                        "background": {
                            "type": "none",
                            "color": "colors-0"
                        },
                        "locking": {
                            "side": "t"
                        },
                        "nature": "wH",
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "mobile-menu",
                    "visible": "m",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 546,
                        "background": {
                            "type": "color",
                            "color": "colors-4"
                        },
                        "locking": {
                            "side": "t",
                            "offset": 0
                        },
                        "nature": "wH",
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 85,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "locking": {
                            "offset": 0
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "mobile-menu-closed",
                    "visible": "m",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 50,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "locking": {
                            "side": "st"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 222,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "locking": {},
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "menu",
                    "visible": "d",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 40,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "locking": {
                            "side": "t"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 106,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "locking": {},
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "ps": [{
                        "trigger": "offscreen",
                        "type": "show",
                        "block": "demo-only-delete"
                    }]
                }, {
                    "slug": "home-hero",
                    "visible": "a",
                    "states": [{
                        "slug": "photo-1",
                        "m": {
                            "background": {
                                "type": "image",
                                "image": {
                                    "key": "fM7ksOhZTMGxwDVASHhJxg/106069/christina-5.jpg",
                                    "aspect_ratio": 1.50012,
                                    "title": "Christina-5",
                                    "type": "asset"
                                },
                                "pos": "cm",
                                "scroll": "x",
                                "opacity": 100,
                                "color": "#000000",
                                "scale": "cover"
                            }
                        },
                        "d": {
                            "background": {
                                "type": "image",
                                "image": {
                                    "key": "fM7ksOhZTMGxwDVASHhJxg/106069/christina-5.jpg",
                                    "aspect_ratio": 1.50012,
                                    "title": "Christina-5",
                                    "type": "asset"
                                },
                                "pos": "lm",
                                "scroll": "x",
                                "opacity": 100,
                                "color": "#ffffff",
                                "scale": "cover"
                            }
                        }
                    }],
                    "m": {
                        "w": 320,
                        "h": 446,
                        "background": {
                            "type": "color",
                            "color": "#43413b",
                            "image": {
                                "key": "GycDTCD8RFqCcxtPP_-peg/shared/kyliemartinphotographybellelumierebridalpt2_14.jpg",
                                "aspect_ratio": 0.74444,
                                "title": "KylieMartinPhotographyBelleLumiereBridalPt2_14",
                                "type": "asset"
                            },
                            "pos": "ct",
                            "opacity": 100,
                            "scroll": "p"
                        },
                        "aav": 6,
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 650,
                        "background": {
                            "type": "image",
                            "color": "#43413b",
                            "image": {
                                "key": "fM7ksOhZTMGxwDVASHhJxg/106069/christina-5.jpg",
                                "aspect_ratio": 1.50012,
                                "title": "Christina-5",
                                "type": "asset"
                            },
                            "pos": "rm",
                            "opacity": 100,
                            "scroll": "p",
                            "scale": "fit"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "stateTrans": [{
                        "d": {
                            "in": {
                                "cl": "fadeIn",
                                "d": 1,
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": 1,
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        },
                        "m": {
                            "in": {
                                "cl": "fadeIn",
                                "d": 1,
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": 1,
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        }
                    }]
                }, {
                    "slug": "brand-bio-1",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 1071,
                        "background": {
                            "type": "color",
                            "color": "colors-5"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 650,
                        "background": {
                            "type": "color",
                            "color": "colors-5"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "ps": [{
                        "trigger": "onscreen",
                        "type": "show",
                        "block": "sticky-menu-closed"
                    }]
                }, {
                    "slug": "spacer",
                    "visible": "d",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 78,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 31,
                        "background": {
                            "type": "color",
                            "color": "colors-5"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "press",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 239,
                        "background": {
                            "type": "color",
                            "color": "colors-5"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 200,
                        "background": {
                            "type": "color",
                            "color": "colors-5"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "from-the-blog",
                    "visible": "a",
                    "states": [{
                        "slug": "view-1",
                        "m": {
                            "background": {
                                "type": "none"
                            }
                        },
                        "d": {
                            "background": {
                                "type": "none"
                            }
                        }
                    }, {
                        "slug": "view-2",
                        "m": {
                            "background": {
                                "type": "none"
                            }
                        },
                        "d": {
                            "background": {
                                "type": "none"
                            }
                        }
                    }, {
                        "slug": "view-3",
                        "m": {
                            "background": {
                                "type": "none"
                            }
                        },
                        "d": {
                            "background": {
                                "type": "none"
                            }
                        }
                    }],
                    "m": {
                        "w": 320,
                        "h": 1874,
                        "background": {
                            "type": "color",
                            "color": "colors-3"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 1082,
                        "background": {
                            "type": "color",
                            "color": "colors-3:90"
                        },
                        "nature": "dH",
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "wpPostLookup": true,
                    "stateTrans": [{
                        "d": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        },
                        "m": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        }
                    }, {
                        "d": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        },
                        "m": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        }
                    }, {
                        "d": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        },
                        "m": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        }
                    }]
                }, {
                    "slug": "start-here",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 706,
                        "background": {
                            "type": "color",
                            "color": "colors-2"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 454,
                        "background": {
                            "type": "color",
                            "color": "colors-2"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "episodes",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 1087,
                        "background": {
                            "type": "color",
                            "color": "colors-6"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 1138,
                        "background": {
                            "type": "color",
                            "color": "colors-2"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "insider-opt-in",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 207,
                        "background": {
                            "type": "image",
                            "color": "#43413b",
                            "image": {
                                "key": "u5TLY1a7RQ-NIPXdlWiJYA/106069/christina-39.jpg",
                                "aspect_ratio": 0.75139,
                                "title": "Christina-39",
                                "type": "asset"
                            },
                            "opacity": 80
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 573,
                        "background": {
                            "type": "video",
                            "color": "colors-7",
                            "image": {
                                "key": "M4Vdew9NSCKOFvLC1cfnnw/106069/cg_home_header_filpped.jpg",
                                "aspect_ratio": 1.33111,
                                "title": "CG Home Header Filpped",
                                "type": "asset"
                            },
                            "pos": "cb",
                            "opacity": 95,
                            "scroll": "x",
                            "video": {
                                "key": "hVV3a19aQryJsrgvDv9oUQ/106069/untitled.mp4",
                                "aspect_ratio": 1.77778,
                                "title": "Untitled",
                                "type": "asset"
                            },
                            "loop": "1"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "new-canvas",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 546,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 448,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "courses",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 1270,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 1200,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "mastermind",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 797,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 843,
                        "background": {
                            "type": "color",
                            "color": "colors-7"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "reviews",
                    "visible": "a",
                    "states": [{
                        "slug": "review-1",
                        "m": {
                            "background": {
                                "type": "none"
                            }
                        },
                        "d": {
                            "background": {
                                "type": "none"
                            }
                        }
                    }, {
                        "slug": "review-2",
                        "m": {
                            "background": {
                                "type": "none"
                            }
                        },
                        "d": {
                            "background": {
                                "type": "none"
                            }
                        }
                    }, {
                        "slug": "review-3",
                        "m": {
                            "background": {
                                "type": "none"
                            }
                        },
                        "d": {
                            "background": {
                                "type": "none"
                            }
                        }
                    }, {
                        "slug": "review-4",
                        "m": {
                            "background": {
                                "type": "none"
                            }
                        },
                        "d": {
                            "background": {
                                "type": "none"
                            }
                        }
                    }, {
                        "slug": "review-5",
                        "m": {
                            "background": {
                                "type": "none"
                            }
                        },
                        "d": {
                            "background": {
                                "type": "none"
                            }
                        }
                    }],
                    "m": {
                        "w": 320,
                        "h": 687,
                        "background": {
                            "type": "image",
                            "color": "colors-5"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 587,
                        "background": {
                            "type": "image",
                            "color": "colors-5"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "stateTrans": [{
                        "d": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        },
                        "m": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        }
                    }, {
                        "d": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        },
                        "m": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        }
                    }, {
                        "d": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        },
                        "m": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        }
                    }, {
                        "d": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        },
                        "m": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        }
                    }, {
                        "d": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        },
                        "m": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeIn"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0",
                                "od": "fadeOut"
                            }
                        }
                    }]
                }, {
                    "slug": "4-secrets-opt-in",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 700,
                        "background": {
                            "type": "color",
                            "color": "colors-4"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 590,
                        "background": {
                            "type": "color",
                            "color": "colors-4"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }, {
                    "slug": "footer",
                    "visible": "a",
                    "states": [],
                    "m": {
                        "w": 320,
                        "h": 1200,
                        "background": {
                            "type": "color",
                            "color": "colors-5"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    },
                    "d": {
                        "w": 1200,
                        "h": 680,
                        "background": {
                            "type": "color",
                            "color": "colors-5"
                        },
                        "tr": {
                            "in": {
                                "cl": "fadeIn",
                                "d": "0.5",
                                "dl": "0"
                            },
                            "out": {
                                "cl": "fadeOut",
                                "d": "0.5",
                                "dl": "0"
                            }
                        }
                    }
                }],
                "elementData": [{
                    "type": "simple",
                    "visible": "d",
                    "id": "sticky-menu-open_0",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 48,
                        "y": 75,
                        "w": 224,
                        "h": 350,
                        "a": 0
                    },
                    "d": {
                        "x": 517,
                        "y": 0,
                        "w": 683,
                        "h": 662,
                        "a": 0,
                        "lockH": "r",
                        "lockV": "s"
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "sticky-menu-open_1",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 199,
                        "w": 250,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 455,
                        "w": 250,
                        "h": 1,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_2",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 348,
                        "w": 157,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 885,
                        "y": 472,
                        "w": 153,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "sticky-menu-open"
                    }]
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_3",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 394,
                        "w": 157,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 371,
                        "w": 187,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "sticky-menu-open"
                    }]
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "sticky-menu-open_4",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 245,
                        "w": 250,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 405,
                        "w": 250,
                        "h": 1,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "sticky-menu-open_5",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 290,
                        "w": 250,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 354,
                        "w": 250,
                        "h": 1,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_6",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 302,
                        "w": 157,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 321,
                        "w": 77,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "sticky-menu-open"
                    }]
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "sticky-menu-open_7",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 336,
                        "w": 250,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 304,
                        "w": 250,
                        "h": 1,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_8",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 257,
                        "w": 157,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 270,
                        "w": 77,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "sticky-menu-open"
                    }]
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "sticky-menu-open_9",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 381,
                        "w": 250,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 253,
                        "w": 250,
                        "h": 1,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_10",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 212,
                        "w": 157,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 220,
                        "w": 77,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "sticky-menu-open"
                    }]
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "sticky-menu-open_11",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 426,
                        "w": 250,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 203,
                        "w": 250,
                        "h": 1,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_12",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 167,
                        "w": 157,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 884,
                        "y": 170,
                        "w": 77,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "sticky-menu-open"
                    }]
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_13",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 99,
                        "w": 211,
                        "h": 53,
                        "a": 0
                    },
                    "d": {
                        "x": 883,
                        "y": 91,
                        "w": 263,
                        "h": 48,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "sticky-menu-open_14",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 272,
                        "y": 12,
                        "w": 35,
                        "h": 37,
                        "a": 0,
                        "lockV": "t"
                    },
                    "d": {
                        "x": 1152,
                        "y": 7,
                        "w": 40,
                        "h": 45,
                        "a": 0,
                        "lockH": "r",
                        "lockV": "t"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "sticky-menu-open"
                    }]
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "sticky-menu-open_15",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 34,
                        "y": 482,
                        "w": 21,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 592,
                        "y": 569,
                        "w": 19,
                        "h": 20,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "sticky-menu-open_16",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 73,
                        "y": 482,
                        "w": 21,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 620,
                        "y": 567,
                        "w": 22,
                        "h": 23,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "sticky-menu-open_17",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 116,
                        "y": 482,
                        "w": 21,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 653,
                        "y": 569,
                        "w": 19,
                        "h": 20,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "sticky-menu-open_18",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 160,
                        "y": 486,
                        "w": 18,
                        "h": 17,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 685,
                        "y": 571,
                        "w": 17,
                        "h": 16,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "sticky-menu-open_19",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 48,
                        "y": 6,
                        "w": 224,
                        "h": 28,
                        "a": 0
                    },
                    "d": {
                        "x": 885,
                        "y": 527,
                        "w": 177,
                        "h": 42,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "sticky-menu-open_20",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 19,
                        "y": 18,
                        "w": 146,
                        "h": 37,
                        "a": 0
                    },
                    "d": {
                        "x": 907,
                        "y": 540,
                        "w": 134,
                        "h": 23,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_21",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 35,
                        "y": 302,
                        "w": 157,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 886,
                        "y": 421,
                        "w": 232,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "sticky-menu-open"
                    }]
                }, {
                    "type": "graphic",
                    "visible": "m",
                    "id": "sticky-menu-open_22",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 0,
                        "y": 48,
                        "w": 320,
                        "h": 162,
                        "a": 0,
                        "gs": {
                            "s": 60
                        },
                        "lockV": "ts"
                    },
                    "d": {
                        "x": 571,
                        "y": 13,
                        "w": 59,
                        "h": 59,
                        "a": 0
                    },
                    "c": {
                        "key": "FA52ImbjRA2UIbwyNcRHKA/106069/cg_17.jpg",
                        "aspect_ratio": 1.33087
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "sticky-menu-open_23",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 48,
                        "y": 101,
                        "w": 224,
                        "h": 298,
                        "a": 0
                    },
                    "d": {
                        "x": 594,
                        "y": 95,
                        "w": 229,
                        "h": 306,
                        "a": 0,
                        "gs": {
                            "s": 60,
                            "t": "cover"
                        },
                        "lockH": "r"
                    },
                    "c": {
                        "key": "rOuFbZENR5uk1BTWK0kJOA/106069/christina-9_1.jpg",
                        "aspect_ratio": 0.66672
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_24",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 73,
                        "y": 236,
                        "w": 174,
                        "h": 29,
                        "a": 0
                    },
                    "d": {
                        "x": 471,
                        "y": 75,
                        "w": 299,
                        "h": 113,
                        "a": -15,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "sticky-menu-open_25",
                    "blockId": "sticky-menu-open",
                    "m": {
                        "x": 29,
                        "y": 82,
                        "w": 270,
                        "h": 217,
                        "a": 0
                    },
                    "d": {
                        "x": 594,
                        "y": 423,
                        "w": 239,
                        "h": 128,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "sticky-menu-closed_0",
                    "blockId": "sticky-menu-closed",
                    "m": {
                        "x": 3,
                        "y": 7,
                        "w": 22,
                        "h": 21,
                        "a": 0
                    },
                    "d": {
                        "x": 1142,
                        "y": 15,
                        "w": 36,
                        "h": 30,
                        "a": 0,
                        "lockH": "r",
                        "lockV": "t"
                    },
                    "pc": [{
                        "type": "show",
                        "block": "sticky-menu-open"
                    }]
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "sticky-menu-closed_1",
                    "blockId": "sticky-menu-closed",
                    "m": {
                        "x": 276,
                        "y": 398,
                        "w": 39,
                        "h": 22,
                        "a": 90
                    },
                    "d": {
                        "x": 1144,
                        "y": 686,
                        "w": 47,
                        "h": 47,
                        "a": -90,
                        "lockH": "r",
                        "lockV": "b"
                    }
                }, {
                    "type": "simple",
                    "visible": "m",
                    "id": "mobile-menu_0",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 0,
                        "y": 3,
                        "w": 320,
                        "h": 45,
                        "a": 0,
                        "lockV": "t"
                    },
                    "d": {
                        "x": 360,
                        "y": 26,
                        "w": 480,
                        "h": 34,
                        "a": 0
                    }
                }, {
                    "type": "icon",
                    "visible": "m",
                    "id": "mobile-menu_1",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 34,
                        "y": 482,
                        "w": 21,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 151.755,
                        "y": 273.459,
                        "w": 25.756,
                        "h": 26.48,
                        "a": 0
                    }
                }, {
                    "type": "icon",
                    "visible": "m",
                    "id": "mobile-menu_2",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 73,
                        "y": 482,
                        "w": 21,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 185.005,
                        "y": 271.191,
                        "w": 30.006,
                        "h": 31.015,
                        "a": 0
                    }
                }, {
                    "type": "icon",
                    "visible": "m",
                    "id": "mobile-menu_3",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 116,
                        "y": 482,
                        "w": 21,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 225.755,
                        "y": 273.459,
                        "w": 25.756,
                        "h": 26.48,
                        "a": 0
                    }
                }, {
                    "type": "icon",
                    "visible": "m",
                    "id": "mobile-menu_4",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 160,
                        "y": 486,
                        "w": 18,
                        "h": 17,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 266.648,
                        "y": 276.887,
                        "w": 23.006,
                        "h": 22.007,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "mobile-menu_5",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 35,
                        "y": 246,
                        "w": 236,
                        "h": 53,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 121,
                        "y": 162,
                        "w": 955,
                        "h": 343,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "m",
                    "id": "mobile-menu_6",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 35,
                        "y": 313,
                        "w": 91,
                        "h": 17,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 655,
                        "y": 34,
                        "w": 52,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "mobile-menu"
                    }]
                }, {
                    "type": "text",
                    "visible": "m",
                    "id": "mobile-menu_7",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 35,
                        "y": 382,
                        "w": 86,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 1018.6,
                        "y": 34,
                        "w": 77,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "mobile-menu"
                    }]
                }, {
                    "type": "text",
                    "visible": "m",
                    "id": "mobile-menu_8",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 35,
                        "y": 348,
                        "w": 75,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 735.4,
                        "y": 34,
                        "w": 57,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "mobile-menu"
                    }]
                }, {
                    "type": "text",
                    "visible": "m",
                    "id": "mobile-menu_10",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 148,
                        "y": 382,
                        "w": 111,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 1018.6,
                        "y": 34,
                        "w": 77,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "mobile-menu"
                    }]
                }, {
                    "type": "text",
                    "visible": "m",
                    "id": "mobile-menu_11",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 148,
                        "y": 313,
                        "w": 155,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 820.8,
                        "y": 34,
                        "w": 71,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "mobile-menu"
                    }]
                }, {
                    "type": "text",
                    "visible": "m",
                    "id": "mobile-menu_12",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 35,
                        "y": 417,
                        "w": 60,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 1018.6,
                        "y": 34,
                        "w": 77,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "mobile-menu"
                    }]
                }, {
                    "type": "text",
                    "visible": "m",
                    "id": "mobile-menu_13",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 148,
                        "y": 348,
                        "w": 155,
                        "h": 22,
                        "a": 0,
                        "lockV": "b"
                    },
                    "d": {
                        "x": 820.8,
                        "y": 34,
                        "w": 71,
                        "h": 26,
                        "a": 0,
                        "lockH": "r"
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "mobile-menu"
                    }]
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "mobile-menu_14",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": -5,
                        "y": -9,
                        "w": 327,
                        "h": 225,
                        "a": 0
                    },
                    "d": {
                        "x": 561,
                        "y": 13,
                        "w": 79,
                        "h": 59,
                        "a": 0
                    },
                    "c": {
                        "key": "fM7ksOhZTMGxwDVASHhJxg/106069/christina-5.jpg",
                        "aspect_ratio": 1.50012
                    }
                }, {
                    "type": "icon",
                    "visible": "m",
                    "id": "mobile-menu_15",
                    "blockId": "mobile-menu",
                    "m": {
                        "x": 11,
                        "y": 13,
                        "w": 27,
                        "h": 24,
                        "a": 0,
                        "lockV": "t"
                    },
                    "d": {
                        "x": 550,
                        "y": -28,
                        "w": 100,
                        "h": 100,
                        "a": 0
                    },
                    "pc": [{
                        "type": "hide",
                        "block": "mobile-menu"
                    }]
                }, {
                    "type": "icon",
                    "visible": "m",
                    "id": "mobile-menu-closed_0",
                    "blockId": "mobile-menu-closed",
                    "m": {
                        "x": 280,
                        "y": 8,
                        "w": 24,
                        "h": 37,
                        "a": 0
                    },
                    "d": {
                        "x": 550,
                        "y": -28,
                        "w": 100,
                        "h": 100,
                        "a": 0
                    },
                    "pc": [{
                        "type": "show",
                        "block": "mobile-menu"
                    }]
                }, {
                    "type": "svg",
                    "visible": "a",
                    "id": "mobile-menu-closed_1",
                    "blockId": "mobile-menu-closed",
                    "m": {
                        "x": 6,
                        "y": 5,
                        "w": 171,
                        "h": 42,
                        "a": 0
                    },
                    "d": {
                        "x": 468,
                        "y": 13,
                        "w": 264,
                        "h": 59,
                        "a": 0
                    },
                    "c": {
                        "key": "8hmzPseEQsK2bn7r51hM3A/106069/linear_logo_with_script.svg",
                        "aspect_ratio": 4.47761
                    }
                }, {
                    "type": "svg",
                    "visible": "a",
                    "id": "mobile-menu-closed_2",
                    "blockId": "mobile-menu-closed",
                    "m": {
                        "x": 6,
                        "y": 5,
                        "w": 171,
                        "h": 42,
                        "a": 0
                    },
                    "d": {
                        "x": 468,
                        "y": 13,
                        "w": 264,
                        "h": 59,
                        "a": 0
                    },
                    "c": {
                        "key": "8hmzPseEQsK2bn7r51hM3A/106069/linear_logo_with_script.svg",
                        "aspect_ratio": 4.47761
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "menu_0",
                    "blockId": "menu",
                    "m": {
                        "x": 19,
                        "y": 18,
                        "w": 146,
                        "h": 37,
                        "a": 0
                    },
                    "d": {
                        "x": 320,
                        "y": 45,
                        "w": 46,
                        "h": 19,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "svg",
                    "visible": "a",
                    "id": "menu_1",
                    "blockId": "menu",
                    "m": {
                        "x": 48,
                        "y": 6,
                        "w": 224,
                        "h": 28,
                        "a": 0
                    },
                    "d": {
                        "x": 21,
                        "y": 2,
                        "w": 260,
                        "h": 101,
                        "a": 0,
                        "lockH": "l"
                    },
                    "c": {
                        "key": "8hmzPseEQsK2bn7r51hM3A/106069/linear_logo_with_script.svg",
                        "aspect_ratio": 4.47761
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "menu_2",
                    "blockId": "menu",
                    "m": {
                        "x": 48,
                        "y": 6,
                        "w": 224,
                        "h": 28,
                        "a": 0
                    },
                    "d": {
                        "x": 1016,
                        "y": 35,
                        "w": 147,
                        "h": 36,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "menu_3",
                    "blockId": "menu",
                    "m": {
                        "x": 19,
                        "y": 18,
                        "w": 146,
                        "h": 37,
                        "a": 0
                    },
                    "d": {
                        "x": 1025,
                        "y": 45,
                        "w": 134,
                        "h": 23,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "menu_4",
                    "blockId": "menu",
                    "m": {
                        "x": 19,
                        "y": 18,
                        "w": 146,
                        "h": 37,
                        "a": 0
                    },
                    "d": {
                        "x": 666,
                        "y": 45,
                        "w": 141,
                        "h": 23,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "menu_5",
                    "blockId": "menu",
                    "m": {
                        "x": 19,
                        "y": 18,
                        "w": 146,
                        "h": 37,
                        "a": 0
                    },
                    "d": {
                        "x": 561,
                        "y": 45,
                        "w": 75,
                        "h": 23,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "menu_6",
                    "blockId": "menu",
                    "m": {
                        "x": 19,
                        "y": 18,
                        "w": 146,
                        "h": 37,
                        "a": 0
                    },
                    "d": {
                        "x": 483,
                        "y": 45,
                        "w": 48,
                        "h": 23,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "menu_7",
                    "blockId": "menu",
                    "m": {
                        "x": 19,
                        "y": 18,
                        "w": 146,
                        "h": 37,
                        "a": 0
                    },
                    "d": {
                        "x": 837,
                        "y": 45,
                        "w": 156,
                        "h": 18,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "menu_8",
                    "blockId": "menu",
                    "m": {
                        "x": 19,
                        "y": 18,
                        "w": 146,
                        "h": 37,
                        "a": 0
                    },
                    "d": {
                        "x": 396,
                        "y": 45,
                        "w": 57,
                        "h": 16,
                        "a": 0,
                        "lockH": "r"
                    }
                }, {
                    "type": "svg",
                    "visible": "a",
                    "id": "menu_9",
                    "blockId": "menu",
                    "m": {
                        "x": 48,
                        "y": 6,
                        "w": 224,
                        "h": 28,
                        "a": 0
                    },
                    "d": {
                        "x": 21,
                        "y": 2,
                        "w": 260,
                        "h": 101,
                        "a": 0,
                        "lockH": "l"
                    },
                    "c": {
                        "key": "8hmzPseEQsK2bn7r51hM3A/106069/linear_logo_with_script.svg",
                        "aspect_ratio": 4.47761
                    }
                }, {
                    "type": "svg",
                    "visible": "a",
                    "id": "menu_10",
                    "blockId": "menu",
                    "m": {
                        "x": 48,
                        "y": 6,
                        "w": 224,
                        "h": 28,
                        "a": 0
                    },
                    "d": {
                        "x": 21,
                        "y": 2,
                        "w": 260,
                        "h": 101,
                        "a": 0,
                        "lockH": "l"
                    },
                    "c": {
                        "key": "8hmzPseEQsK2bn7r51hM3A/106069/linear_logo_with_script.svg",
                        "aspect_ratio": 4.47761
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "home-hero_photo-1_0",
                    "blockId": "home-hero",
                    "m": {
                        "x": 23,
                        "y": 212,
                        "w": 277,
                        "h": 193,
                        "a": 0
                    },
                    "d": {
                        "x": 43,
                        "y": 103,
                        "w": 469,
                        "h": 281,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "brand-bio-1_0",
                    "blockId": "brand-bio-1",
                    "m": {
                        "x": 25,
                        "y": 332,
                        "w": 283,
                        "h": 129,
                        "a": 0
                    },
                    "d": {
                        "x": 585,
                        "y": 62,
                        "w": 576,
                        "h": 61,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "m",
                    "id": "brand-bio-1_1",
                    "blockId": "brand-bio-1",
                    "m": {
                        "x": 25,
                        "y": 311,
                        "w": 283,
                        "h": 129,
                        "a": 0
                    },
                    "d": {
                        "x": 595,
                        "y": 65,
                        "w": 576,
                        "h": 61,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "brand-bio-1_2",
                    "blockId": "brand-bio-1",
                    "m": {
                        "x": 25,
                        "y": 405,
                        "w": 270,
                        "h": 580,
                        "a": 0
                    },
                    "d": {
                        "x": 585,
                        "y": 137,
                        "w": 548,
                        "h": 362,
                        "a": 0
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "brand-bio-1_3",
                    "blockId": "brand-bio-1",
                    "m": {
                        "x": 105,
                        "y": -27,
                        "w": 229,
                        "h": 305,
                        "a": 0
                    },
                    "d": {
                        "x": 92,
                        "y": -77,
                        "w": 431,
                        "h": 571,
                        "a": 0,
                        "gs": {
                            "s": 100
                        },
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "c": {
                        "key": "s30HNnuFQGG86M885Qcb6A/106069/cg_21.jpg",
                        "aspect_ratio": 0.79983
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "brand-bio-1_4",
                    "blockId": "brand-bio-1",
                    "m": {
                        "x": -22,
                        "y": 61,
                        "w": 209,
                        "h": 295,
                        "a": 33
                    },
                    "d": {
                        "x": 308,
                        "y": 250,
                        "w": 161,
                        "h": 395,
                        "a": 42
                    },
                    "c": {
                        "key": "5YkDV_jhTj-P_KxR8Hsl7w/shared/whitedoodle.png",
                        "aspect_ratio": 0.44141
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "brand-bio-1_5",
                    "blockId": "brand-bio-1",
                    "m": {
                        "x": 45,
                        "y": 1006,
                        "w": 231,
                        "h": 50,
                        "a": 0
                    },
                    "d": {
                        "x": 585,
                        "y": 538,
                        "w": 241,
                        "h": 52,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "brand-bio-1_6",
                    "blockId": "brand-bio-1",
                    "m": {
                        "x": 59,
                        "y": 1023,
                        "w": 206,
                        "h": 20,
                        "a": 0
                    },
                    "d": {
                        "x": 598,
                        "y": 556,
                        "w": 215,
                        "h": 15,
                        "a": 0
                    }
                }, {
                    "type": "svg",
                    "visible": "a",
                    "id": "press_0",
                    "blockId": "press",
                    "m": {
                        "x": 42,
                        "y": 147,
                        "w": 87,
                        "h": 38,
                        "a": 0,
                        "o": 40
                    },
                    "d": {
                        "x": 298,
                        "y": 56,
                        "w": 114,
                        "h": 42,
                        "a": 0,
                        "o": 40
                    },
                    "c": {
                        "key": "FwOj37k1QEySzVNq1lYLEg/106069/cnn-logo.svg",
                        "aspect_ratio": 2.16638
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "press_1",
                    "blockId": "press",
                    "m": {
                        "x": 33,
                        "y": 92,
                        "w": 102,
                        "h": 27,
                        "a": 0,
                        "o": 40
                    },
                    "d": {
                        "x": 460,
                        "y": 61,
                        "w": 118,
                        "h": 32,
                        "a": 0,
                        "o": 40,
                        "gs": {
                            "t": "fit"
                        }
                    },
                    "c": {
                        "key": "alxBJGfVSdG76BHI_RoKtg/106069/forbes-logo-blk-900x253.png",
                        "aspect_ratio": 3.55731
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "press_2",
                    "blockId": "press",
                    "m": {
                        "x": 174,
                        "y": 149,
                        "w": 113,
                        "h": 36,
                        "a": 0,
                        "o": 40
                    },
                    "d": {
                        "x": 954,
                        "y": 57,
                        "w": 115,
                        "h": 39,
                        "a": 0,
                        "o": 40,
                        "gs": {
                            "t": "fit"
                        }
                    },
                    "c": {
                        "key": "poT6SOoYQxGADKgz-3vPJA/106069/thrillist_logo.png",
                        "aspect_ratio": 2.97
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "press_3",
                    "blockId": "press",
                    "m": {
                        "x": 196,
                        "y": 80,
                        "w": 68,
                        "h": 57,
                        "a": 0,
                        "o": 40
                    },
                    "d": {
                        "x": 626,
                        "y": 34,
                        "w": 119,
                        "h": 90,
                        "a": 0,
                        "o": 40,
                        "gs": {
                            "t": "fit"
                        }
                    },
                    "c": {
                        "key": "G2531DeDRiaOpyuBre9N0A/106069/adworld.png",
                        "aspect_ratio": 1.325
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "press_4",
                    "blockId": "press",
                    "m": {
                        "x": 67,
                        "y": 45,
                        "w": 186,
                        "h": 21,
                        "a": 0
                    },
                    "d": {
                        "x": 131,
                        "y": 51,
                        "w": 117,
                        "h": 39,
                        "a": 0
                    }
                }, {
                    "type": "graphic",
                    "visible": "d",
                    "id": "press_5",
                    "blockId": "press",
                    "m": {
                        "x": 33,
                        "y": 147,
                        "w": 87,
                        "h": 44,
                        "a": 0,
                        "o": 40
                    },
                    "d": {
                        "x": 794,
                        "y": 48,
                        "w": 114,
                        "h": 57,
                        "a": 0,
                        "o": 40
                    },
                    "c": {
                        "key": "lS3QahWHSU6T2VfZkuxkpQ/106069/startup-grind.png",
                        "aspect_ratio": 2
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "from-the-blog_0",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 76,
                        "y": 1774,
                        "w": 168,
                        "h": 50,
                        "a": 0
                    },
                    "d": {
                        "x": 514,
                        "y": 957,
                        "w": 172,
                        "h": 52,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_1",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 32,
                        "y": 87,
                        "w": 257,
                        "h": 37,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 324,
                        "y": 135,
                        "w": 554,
                        "h": 76,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_2",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 52,
                        "y": 23,
                        "w": 217,
                        "h": 40,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 444,
                        "y": 73,
                        "w": 313,
                        "h": 61,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_3",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 90,
                        "y": 1791,
                        "w": 140,
                        "h": 20,
                        "a": 0
                    },
                    "d": {
                        "x": 529,
                        "y": 975,
                        "w": 143,
                        "h": 15,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_4",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 20,
                        "y": 149,
                        "w": 281,
                        "h": 151,
                        "a": 0
                    },
                    "d": {
                        "x": 250,
                        "y": 211,
                        "w": 701,
                        "h": 89,
                        "a": 0
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "from-the-blog_view-1_0",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 30,
                        "y": 335,
                        "w": 261,
                        "h": 261,
                        "a": 0,
                        "gs": {
                            "s": 80
                        }
                    },
                    "d": {
                        "x": 65,
                        "y": 351,
                        "w": 322,
                        "h": 349,
                        "a": 0,
                        "gs": {
                            "s": 50
                        },
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "c": {
                        "key": "lrCf-DwzSPi8MClaPNGlCg/106069/social-squares-morning-meditations-styled-stock-images028.jpg",
                        "aspect_ratio": 0.71444
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "from-the-blog_view-1_1",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 30,
                        "y": 596,
                        "w": 261,
                        "h": 180,
                        "a": 0
                    },
                    "d": {
                        "x": 65,
                        "y": 700,
                        "w": 322,
                        "h": 194,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_view-1_2",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 52,
                        "y": 627,
                        "w": 226,
                        "h": 81,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 98,
                        "y": 728,
                        "w": 258,
                        "h": 102,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_view-1_3",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 52,
                        "y": 733,
                        "w": 180,
                        "h": 15,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 98,
                        "y": 844,
                        "w": 161,
                        "h": 17,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "from-the-blog_view-2_0",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 30,
                        "y": 1072,
                        "w": 261,
                        "h": 181,
                        "a": 0
                    },
                    "d": {
                        "x": 440,
                        "y": 700,
                        "w": 322,
                        "h": 194,
                        "a": 0
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "from-the-blog_view-2_1",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 30,
                        "y": 814,
                        "w": 261,
                        "h": 261,
                        "a": 0,
                        "gs": {
                            "s": 80
                        }
                    },
                    "d": {
                        "x": 440,
                        "y": 351,
                        "w": 322,
                        "h": 349,
                        "a": 0,
                        "gs": {
                            "s": 50
                        },
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "c": {
                        "key": "9aXb8xDvQZ2yom2IHJwK-g/106069/cg_26.jpg",
                        "aspect_ratio": 0.75139
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_view-2_2",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 52,
                        "y": 1103,
                        "w": 177,
                        "h": 81,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 478,
                        "y": 728,
                        "w": 230,
                        "h": 103,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_view-2_3",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 52,
                        "y": 1209,
                        "w": 146,
                        "h": 17,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 478,
                        "y": 844,
                        "w": 243,
                        "h": 23,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "from-the-blog_view-3_0",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 30,
                        "y": 1549,
                        "w": 261,
                        "h": 181,
                        "a": 0
                    },
                    "d": {
                        "x": 814,
                        "y": 700,
                        "w": 322,
                        "h": 194,
                        "a": 0
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "from-the-blog_view-3_1",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 30,
                        "y": 1292,
                        "w": 261,
                        "h": 261,
                        "a": 0,
                        "gs": {
                            "s": 80
                        }
                    },
                    "d": {
                        "x": 814,
                        "y": 351,
                        "w": 322,
                        "h": 349,
                        "a": 0,
                        "gs": {
                            "s": 50
                        },
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "c": {
                        "key": "2w0CkBh_RxKcm8fFJCeKZg/106069/cg_23.jpg",
                        "aspect_ratio": 1.33087
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_view-3_2",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 52,
                        "y": 1582,
                        "w": 225,
                        "h": 81,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 848,
                        "y": 728,
                        "w": 257,
                        "h": 104,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "from-the-blog_view-3_3",
                    "blockId": "from-the-blog",
                    "m": {
                        "x": 52,
                        "y": 1689,
                        "w": 146,
                        "h": 37,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 848,
                        "y": 844,
                        "w": 243,
                        "h": 23,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "start-here_0",
                    "blockId": "start-here",
                    "m": {
                        "x": 30,
                        "y": 75,
                        "w": 263,
                        "h": 144,
                        "a": 0
                    },
                    "d": {
                        "x": 118,
                        "y": 154,
                        "w": 391,
                        "h": 243,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "start-here_1",
                    "blockId": "start-here",
                    "m": {
                        "x": 32,
                        "y": 249,
                        "w": 260,
                        "h": 373,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 607,
                        "y": 125,
                        "w": 483,
                        "h": 261,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "start-here_2",
                    "blockId": "start-here",
                    "m": {
                        "x": 32,
                        "y": 34,
                        "w": 257,
                        "h": 23,
                        "a": 0
                    },
                    "d": {
                        "x": 118,
                        "y": 104,
                        "w": 407,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "d",
                    "id": "episodes_0",
                    "blockId": "episodes",
                    "m": {
                        "x": 30,
                        "y": 596,
                        "w": 261,
                        "h": 180,
                        "a": 0
                    },
                    "d": {
                        "x": 0,
                        "y": 56,
                        "w": 998,
                        "h": 943,
                        "a": 0,
                        "lockH": "ls"
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "episodes_1",
                    "blockId": "episodes",
                    "m": {
                        "x": -42,
                        "y": -75,
                        "w": 333,
                        "h": 453,
                        "a": -10
                    },
                    "d": {
                        "x": 695,
                        "y": 257,
                        "w": 497,
                        "h": 561,
                        "a": 0
                    },
                    "c": {
                        "key": "_Uh_EeftQYOLO7Qr-W9NAQ/shared/iphone-blank.png",
                        "aspect_ratio": 0.73236
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "episodes_2",
                    "blockId": "episodes",
                    "m": {
                        "x": 258,
                        "y": 621,
                        "w": 26,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 667,
                        "y": 443,
                        "w": 55,
                        "h": 28,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "episodes_3",
                    "blockId": "episodes",
                    "m": {
                        "x": 53,
                        "y": 991,
                        "w": 214,
                        "h": 50,
                        "a": 0
                    },
                    "d": {
                        "x": 122,
                        "y": 857,
                        "w": 218,
                        "h": 50,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_4",
                    "blockId": "episodes",
                    "m": {
                        "x": 66,
                        "y": 1008,
                        "w": 188,
                        "h": 20,
                        "a": 0
                    },
                    "d": {
                        "x": 134,
                        "y": 874,
                        "w": 194,
                        "h": 15,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "episodes_5",
                    "blockId": "episodes",
                    "m": {
                        "x": 30,
                        "y": 1551,
                        "w": 132,
                        "h": 23,
                        "a": 0
                    },
                    "d": {
                        "x": 550,
                        "y": 449,
                        "w": 122,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_6",
                    "blockId": "episodes",
                    "m": {
                        "x": 27,
                        "y": 621,
                        "w": 65,
                        "h": 21,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 121,
                        "y": 443,
                        "w": 39,
                        "h": 29,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "episodes_7",
                    "blockId": "episodes",
                    "m": {
                        "x": 257,
                        "y": 728,
                        "w": 26,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 667,
                        "y": 546,
                        "w": 55,
                        "h": 28,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "episodes_8",
                    "blockId": "episodes",
                    "m": {
                        "x": 30,
                        "y": 1551,
                        "w": 132,
                        "h": 23,
                        "a": 0
                    },
                    "d": {
                        "x": 550,
                        "y": 551,
                        "w": 122,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_9",
                    "blockId": "episodes",
                    "m": {
                        "x": 26,
                        "y": 729,
                        "w": 46,
                        "h": 19,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 121,
                        "y": 546,
                        "w": 39,
                        "h": 30,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "episodes_10",
                    "blockId": "episodes",
                    "m": {
                        "x": 257,
                        "y": 824,
                        "w": 26,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 667,
                        "y": 648,
                        "w": 55,
                        "h": 28,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "episodes_11",
                    "blockId": "episodes",
                    "m": {
                        "x": 30,
                        "y": 1551,
                        "w": 132,
                        "h": 23,
                        "a": 0
                    },
                    "d": {
                        "x": 550,
                        "y": 653,
                        "w": 122,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_12",
                    "blockId": "episodes",
                    "m": {
                        "x": 26,
                        "y": 824,
                        "w": 40,
                        "h": 28,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 121,
                        "y": 649,
                        "w": 39,
                        "h": 29,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "episodes_13",
                    "blockId": "episodes",
                    "m": {
                        "x": 28,
                        "y": 589,
                        "w": 260,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 122,
                        "y": 404,
                        "w": 590,
                        "h": 1,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "episodes_14",
                    "blockId": "episodes",
                    "m": {
                        "x": 28,
                        "y": 692,
                        "w": 260,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 122,
                        "y": 507,
                        "w": 590,
                        "h": 1,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "episodes_15",
                    "blockId": "episodes",
                    "m": {
                        "x": 27,
                        "y": 787,
                        "w": 260,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 122,
                        "y": 610,
                        "w": 590,
                        "h": 1,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "episodes_16",
                    "blockId": "episodes",
                    "m": {
                        "x": 27,
                        "y": 882,
                        "w": 260,
                        "h": 1,
                        "a": 0
                    },
                    "d": {
                        "x": 122,
                        "y": 713,
                        "w": 590,
                        "h": 1,
                        "a": 0
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "episodes_17",
                    "blockId": "episodes",
                    "m": {
                        "x": 257,
                        "y": 920,
                        "w": 26,
                        "h": 26,
                        "a": 0
                    },
                    "d": {
                        "x": 667,
                        "y": 751,
                        "w": 55,
                        "h": 28,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "d",
                    "id": "episodes_18",
                    "blockId": "episodes",
                    "m": {
                        "x": 30,
                        "y": 1551,
                        "w": 132,
                        "h": 23,
                        "a": 0
                    },
                    "d": {
                        "x": 550,
                        "y": 757,
                        "w": 122,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_19",
                    "blockId": "episodes",
                    "m": {
                        "x": 26,
                        "y": 919,
                        "w": 38,
                        "h": 26,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 121,
                        "y": 757,
                        "w": 39,
                        "h": 29,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_20",
                    "blockId": "episodes",
                    "m": {
                        "x": 72,
                        "y": 613,
                        "w": 175,
                        "h": 58,
                        "a": 0
                    },
                    "d": {
                        "x": 174,
                        "y": 427,
                        "w": 298,
                        "h": 62,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_21",
                    "blockId": "episodes",
                    "m": {
                        "x": 71,
                        "y": 710,
                        "w": 167,
                        "h": 61,
                        "a": 0
                    },
                    "d": {
                        "x": 174,
                        "y": 529,
                        "w": 332,
                        "h": 62,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_22",
                    "blockId": "episodes",
                    "m": {
                        "x": 71,
                        "y": 804,
                        "w": 139,
                        "h": 65,
                        "a": 0
                    },
                    "d": {
                        "x": 174,
                        "y": 632,
                        "w": 290,
                        "h": 62,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_23",
                    "blockId": "episodes",
                    "m": {
                        "x": 71,
                        "y": 899,
                        "w": 165,
                        "h": 66,
                        "a": 0
                    },
                    "d": {
                        "x": 174,
                        "y": 743,
                        "w": 332,
                        "h": 62,
                        "a": 0
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "episodes_24",
                    "blockId": "episodes",
                    "m": {
                        "x": 28,
                        "y": 441,
                        "w": 112,
                        "h": 121,
                        "a": 0
                    },
                    "d": {
                        "x": 122,
                        "y": 241,
                        "w": 115,
                        "h": 119,
                        "a": 0
                    },
                    "c": {
                        "key": "5oU_ztRPR_WnUwMmhAU2-w/106069/podcast_image.jpg",
                        "aspect_ratio": 1
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "episodes_25",
                    "blockId": "episodes",
                    "m": {
                        "x": 64,
                        "y": 477,
                        "w": 42,
                        "h": 42,
                        "a": 0
                    },
                    "d": {
                        "x": 655,
                        "y": 278,
                        "w": 59,
                        "h": 61,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_26",
                    "blockId": "episodes",
                    "m": {
                        "x": 162,
                        "y": 449,
                        "w": 141,
                        "h": 114,
                        "a": 0
                    },
                    "d": {
                        "x": 268,
                        "y": 285,
                        "w": 326,
                        "h": 69,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_27",
                    "blockId": "episodes",
                    "m": {
                        "x": 28,
                        "y": 407,
                        "w": 211,
                        "h": 23,
                        "a": 0
                    },
                    "d": {
                        "x": 268,
                        "y": 256,
                        "w": 210,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "episodes_28",
                    "blockId": "episodes",
                    "m": {
                        "x": -13,
                        "y": 323,
                        "w": 309,
                        "h": 55,
                        "a": -5
                    },
                    "d": {
                        "x": 91,
                        "y": 113,
                        "w": 482,
                        "h": 91,
                        "a": -4
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "episodes_29",
                    "blockId": "episodes",
                    "m": {
                        "x": 57,
                        "y": -5,
                        "w": 138,
                        "h": 223,
                        "a": -10
                    },
                    "d": {
                        "x": 867,
                        "y": 333,
                        "w": 171,
                        "h": 308,
                        "a": 0
                    },
                    "c": {
                        "key": "Zz4JnRI7TgO440xGw0eRbA/shared/podcastblank.png",
                        "aspect_ratio": 0.53424
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "episodes_30",
                    "blockId": "episodes",
                    "m": {
                        "x": 54,
                        "y": 16,
                        "w": 124,
                        "h": 125,
                        "a": -10,
                        "gs": {
                            "s": 0
                        }
                    },
                    "d": {
                        "x": 862,
                        "y": 323,
                        "w": 177,
                        "h": 174,
                        "a": 0,
                        "gs": {
                            "s": 0
                        }
                    },
                    "c": {
                        "key": "5oU_ztRPR_WnUwMmhAU2-w/106069/podcast_image.jpg",
                        "aspect_ratio": 1
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "new-canvas_0",
                    "blockId": "new-canvas",
                    "m": {
                        "x": 23,
                        "y": -42,
                        "w": 274,
                        "h": 562,
                        "a": 0
                    },
                    "d": {
                        "x": 198,
                        "y": -81,
                        "w": 805,
                        "h": 516,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "new-canvas_1",
                    "blockId": "new-canvas",
                    "m": {
                        "x": 44,
                        "y": 148,
                        "w": 240,
                        "h": 267,
                        "a": 0
                    },
                    "d": {
                        "x": 296,
                        "y": 136,
                        "w": 619,
                        "h": 150,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "new-canvas_2",
                    "blockId": "new-canvas",
                    "m": {
                        "x": 44,
                        "y": -11,
                        "w": 265,
                        "h": 35,
                        "a": 0
                    },
                    "d": {
                        "x": 295,
                        "y": -6,
                        "w": 504,
                        "h": 39,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "new-canvas_3",
                    "blockId": "new-canvas",
                    "m": {
                        "x": 44,
                        "y": 38,
                        "w": 227,
                        "h": 100,
                        "a": 0
                    },
                    "d": {
                        "x": 296,
                        "y": 68,
                        "w": 603,
                        "h": 53,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "new-canvas_4",
                    "blockId": "new-canvas",
                    "m": {
                        "x": 46,
                        "y": 440,
                        "w": 229,
                        "h": 50,
                        "a": 0
                    },
                    "d": {
                        "x": 295,
                        "y": 298,
                        "w": 265,
                        "h": 52,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "new-canvas_5",
                    "blockId": "new-canvas",
                    "m": {
                        "x": 60,
                        "y": 457,
                        "w": 202,
                        "h": 20,
                        "a": 0
                    },
                    "d": {
                        "x": 313,
                        "y": 315,
                        "w": 229,
                        "h": 15,
                        "a": 0
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "courses_0",
                    "blockId": "courses",
                    "m": {
                        "x": 71,
                        "y": 83,
                        "w": 210,
                        "h": 265,
                        "a": 0,
                        "gs": {
                            "s": 30
                        }
                    },
                    "d": {
                        "x": 128,
                        "y": 154,
                        "w": 516,
                        "h": 450,
                        "a": 0,
                        "gs": {
                            "s": 50
                        },
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "c": {
                        "key": "26JogYiXRlOgQLgbNIr6PQ/106069/cg_12.jpg",
                        "aspect_ratio": 0.75139
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "courses_1",
                    "blockId": "courses",
                    "m": {
                        "x": 29,
                        "y": 603,
                        "w": 168,
                        "h": 50,
                        "a": 0
                    },
                    "d": {
                        "x": 738,
                        "y": 490,
                        "w": 176,
                        "h": 52,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "courses_2",
                    "blockId": "courses",
                    "m": {
                        "x": 30,
                        "y": 377,
                        "w": 249,
                        "h": 22,
                        "a": 0
                    },
                    "d": {
                        "x": 738,
                        "y": 225,
                        "w": 266,
                        "h": 23,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "courses_3",
                    "blockId": "courses",
                    "m": {
                        "x": 30,
                        "y": 409,
                        "w": 257,
                        "h": 80,
                        "a": 0
                    },
                    "d": {
                        "x": 738,
                        "y": 264,
                        "w": 399,
                        "h": 99,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "courses_4",
                    "blockId": "courses",
                    "m": {
                        "x": 30,
                        "y": 497,
                        "w": 260,
                        "h": 90,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 738,
                        "y": 381,
                        "w": 364,
                        "h": 91,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "courses_5",
                    "blockId": "courses",
                    "m": {
                        "x": 43,
                        "y": 620,
                        "w": 140,
                        "h": 20,
                        "a": 0
                    },
                    "d": {
                        "x": 750,
                        "y": 507,
                        "w": 153,
                        "h": 15,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "courses_6",
                    "blockId": "courses",
                    "m": {
                        "x": 31,
                        "y": 15,
                        "w": 142,
                        "h": 81,
                        "a": -8,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 29,
                        "y": 75,
                        "w": 367,
                        "h": 151,
                        "a": 351
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "courses_7",
                    "blockId": "courses",
                    "m": {
                        "x": 84,
                        "y": 690,
                        "w": 238,
                        "h": 184,
                        "a": 0,
                        "gs": {
                            "s": 80
                        }
                    },
                    "d": {
                        "x": 584,
                        "y": 688,
                        "w": 619,
                        "h": 450,
                        "a": 0,
                        "gs": {
                            "s": 60
                        },
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "c": {
                        "key": "dTyYoPGmTY6_FWXEL5qyBg/106069/cg_5.jpg",
                        "aspect_ratio": 1.33087
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "courses_8",
                    "blockId": "courses",
                    "m": {
                        "x": 29,
                        "y": 1149,
                        "w": 168,
                        "h": 50,
                        "a": 0
                    },
                    "d": {
                        "x": 125,
                        "y": 1019,
                        "w": 176,
                        "h": 52,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "courses_9",
                    "blockId": "courses",
                    "m": {
                        "x": 30,
                        "y": 899,
                        "w": 249,
                        "h": 22,
                        "a": 0
                    },
                    "d": {
                        "x": 125,
                        "y": 734,
                        "w": 266,
                        "h": 23,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "courses_10",
                    "blockId": "courses",
                    "m": {
                        "x": 30,
                        "y": 932,
                        "w": 205,
                        "h": 76,
                        "a": 0
                    },
                    "d": {
                        "x": 125,
                        "y": 775,
                        "w": 338,
                        "h": 100,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "courses_11",
                    "blockId": "courses",
                    "m": {
                        "x": 30,
                        "y": 1018,
                        "w": 260,
                        "h": 117,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 125,
                        "y": 890,
                        "w": 341,
                        "h": 111,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "courses_12",
                    "blockId": "courses",
                    "m": {
                        "x": 44,
                        "y": 1166,
                        "w": 140,
                        "h": 20,
                        "a": 0
                    },
                    "d": {
                        "x": 137,
                        "y": 1036,
                        "w": 153,
                        "h": 15,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "mastermind_0",
                    "blockId": "mastermind",
                    "m": {
                        "x": 32,
                        "y": 702,
                        "w": 168,
                        "h": 50,
                        "a": 0
                    },
                    "d": {
                        "x": 233,
                        "y": 124,
                        "w": 434,
                        "h": 595,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "mastermind_1",
                    "blockId": "mastermind",
                    "m": {
                        "x": 87,
                        "y": -5,
                        "w": 235,
                        "h": 381,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 584,
                        "y": 525,
                        "w": 168,
                        "h": 52,
                        "a": 0
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "mastermind_2",
                    "blockId": "mastermind",
                    "m": {
                        "x": 24,
                        "y": 25,
                        "w": 242,
                        "h": 317,
                        "a": 0,
                        "gs": {
                            "s": 50
                        }
                    },
                    "d": {
                        "x": 147,
                        "y": 155,
                        "w": 411,
                        "h": 525,
                        "a": 0,
                        "gs": {
                            "s": 50
                        },
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "c": {
                        "key": "Okph3FZBR0m_P8bJrer5Aw/106069/cg_9.jpg",
                        "aspect_ratio": 1.5
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "mastermind_3",
                    "blockId": "mastermind",
                    "m": {
                        "x": 32,
                        "y": 407,
                        "w": 240,
                        "h": 22,
                        "a": 0
                    },
                    "d": {
                        "x": 584,
                        "y": 246,
                        "w": 309,
                        "h": 23,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "mastermind_4",
                    "blockId": "mastermind",
                    "m": {
                        "x": 32,
                        "y": 455,
                        "w": 268,
                        "h": 101,
                        "a": 0
                    },
                    "d": {
                        "x": 584,
                        "y": 291,
                        "w": 443,
                        "h": 107,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "mastermind_5",
                    "blockId": "mastermind",
                    "m": {
                        "x": 32,
                        "y": 574,
                        "w": 237,
                        "h": 112,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 584,
                        "y": 413,
                        "w": 405,
                        "h": 87,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "mastermind_6",
                    "blockId": "mastermind",
                    "m": {
                        "x": 43,
                        "y": 719,
                        "w": 140,
                        "h": 20,
                        "a": 0
                    },
                    "d": {
                        "x": 597,
                        "y": 542,
                        "w": 143,
                        "h": 15,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "mastermind_7",
                    "blockId": "mastermind",
                    "m": {
                        "x": -46,
                        "y": -8,
                        "w": 309,
                        "h": 55,
                        "a": -5
                    },
                    "d": {
                        "x": 52,
                        "y": 116,
                        "w": 276,
                        "h": 91,
                        "a": -8
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-1_0",
                    "blockId": "reviews",
                    "m": {
                        "x": 29,
                        "y": 319,
                        "w": 263,
                        "h": 180,
                        "a": 0
                    },
                    "d": {
                        "x": 312,
                        "y": 307,
                        "w": 576,
                        "h": 108,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-1_1",
                    "blockId": "reviews",
                    "m": {
                        "x": 41,
                        "y": 98,
                        "w": 238,
                        "h": 202,
                        "a": 0
                    },
                    "d": {
                        "x": 253,
                        "y": 136,
                        "w": 694,
                        "h": 160,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-1_2",
                    "blockId": "reviews",
                    "m": {
                        "x": 64,
                        "y": 526,
                        "w": 192,
                        "h": 57,
                        "a": 0
                    },
                    "d": {
                        "x": 509,
                        "y": 446,
                        "w": 182,
                        "h": 46,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-1_3",
                    "blockId": "reviews",
                    "m": {
                        "x": 63,
                        "y": 744,
                        "w": 195,
                        "h": 22,
                        "a": 0
                    },
                    "d": {
                        "x": 409,
                        "y": 797,
                        "w": 382,
                        "h": 27,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "reviews_review-1_4",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 785,
                        "w": 242,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 446,
                        "y": 843,
                        "w": 308,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-1_5",
                    "blockId": "reviews",
                    "m": {
                        "x": 45,
                        "y": 801,
                        "w": 230,
                        "h": 18,
                        "a": 0
                    },
                    "d": {
                        "x": 472,
                        "y": 858,
                        "w": 257,
                        "h": 18,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-1_6",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 40,
                        "w": 243,
                        "h": 16,
                        "a": 0
                    },
                    "d": {
                        "x": 424,
                        "y": 95,
                        "w": 353,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-2_0",
                    "blockId": "reviews",
                    "m": {
                        "x": 26,
                        "y": 316,
                        "w": 269,
                        "h": 180,
                        "a": 0
                    },
                    "d": {
                        "x": 318,
                        "y": 307,
                        "w": 564,
                        "h": 108,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-2_1",
                    "blockId": "reviews",
                    "m": {
                        "x": 23,
                        "y": 131,
                        "w": 274,
                        "h": 140,
                        "a": 0
                    },
                    "d": {
                        "x": 307,
                        "y": 136,
                        "w": 587,
                        "h": 160,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-2_2",
                    "blockId": "reviews",
                    "m": {
                        "x": 64,
                        "y": 506,
                        "w": 192,
                        "h": 57,
                        "a": 0
                    },
                    "d": {
                        "x": 509,
                        "y": 446,
                        "w": 182,
                        "h": 46,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-2_3",
                    "blockId": "reviews",
                    "m": {
                        "x": 63,
                        "y": 744,
                        "w": 195,
                        "h": 22,
                        "a": 0
                    },
                    "d": {
                        "x": 409,
                        "y": 797,
                        "w": 382,
                        "h": 27,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "reviews_review-2_4",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 785,
                        "w": 242,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 446,
                        "y": 843,
                        "w": 308,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-2_5",
                    "blockId": "reviews",
                    "m": {
                        "x": 45,
                        "y": 801,
                        "w": 230,
                        "h": 18,
                        "a": 0
                    },
                    "d": {
                        "x": 472,
                        "y": 858,
                        "w": 257,
                        "h": 18,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-2_6",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 40,
                        "w": 243,
                        "h": 16,
                        "a": 0
                    },
                    "d": {
                        "x": 424,
                        "y": 95,
                        "w": 353,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-3_0",
                    "blockId": "reviews",
                    "m": {
                        "x": 26,
                        "y": 294,
                        "w": 269,
                        "h": 180,
                        "a": 0
                    },
                    "d": {
                        "x": 312,
                        "y": 307,
                        "w": 576,
                        "h": 85,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-3_1",
                    "blockId": "reviews",
                    "m": {
                        "x": 23,
                        "y": 108,
                        "w": 274,
                        "h": 173,
                        "a": 0
                    },
                    "d": {
                        "x": 272,
                        "y": 136,
                        "w": 656,
                        "h": 160,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-3_2",
                    "blockId": "reviews",
                    "m": {
                        "x": 64,
                        "y": 484,
                        "w": 192,
                        "h": 57,
                        "a": 0
                    },
                    "d": {
                        "x": 509,
                        "y": 411,
                        "w": 182,
                        "h": 46,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-3_3",
                    "blockId": "reviews",
                    "m": {
                        "x": 63,
                        "y": 744,
                        "w": 195,
                        "h": 22,
                        "a": 0
                    },
                    "d": {
                        "x": 409,
                        "y": 797,
                        "w": 382,
                        "h": 27,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "reviews_review-3_4",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 785,
                        "w": 242,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 446,
                        "y": 843,
                        "w": 308,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-3_5",
                    "blockId": "reviews",
                    "m": {
                        "x": 45,
                        "y": 801,
                        "w": 230,
                        "h": 18,
                        "a": 0
                    },
                    "d": {
                        "x": 472,
                        "y": 858,
                        "w": 257,
                        "h": 18,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-3_6",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 40,
                        "w": 243,
                        "h": 16,
                        "a": 0
                    },
                    "d": {
                        "x": 424,
                        "y": 95,
                        "w": 353,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-4_0",
                    "blockId": "reviews",
                    "m": {
                        "x": 26,
                        "y": 324,
                        "w": 269,
                        "h": 114,
                        "a": 0
                    },
                    "d": {
                        "x": 338,
                        "y": 336,
                        "w": 524,
                        "h": 80,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-4_1",
                    "blockId": "reviews",
                    "m": {
                        "x": 23,
                        "y": 138,
                        "w": 274,
                        "h": 173,
                        "a": 0
                    },
                    "d": {
                        "x": 271,
                        "y": 155,
                        "w": 682,
                        "h": 160,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-4_2",
                    "blockId": "reviews",
                    "m": {
                        "x": 63,
                        "y": 472,
                        "w": 192,
                        "h": 57,
                        "a": 0
                    },
                    "d": {
                        "x": 509,
                        "y": 446,
                        "w": 182,
                        "h": 46,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-4_3",
                    "blockId": "reviews",
                    "m": {
                        "x": 63,
                        "y": 744,
                        "w": 195,
                        "h": 22,
                        "a": 0
                    },
                    "d": {
                        "x": 409,
                        "y": 797,
                        "w": 382,
                        "h": 27,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "reviews_review-4_4",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 785,
                        "w": 242,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 446,
                        "y": 843,
                        "w": 308,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-4_5",
                    "blockId": "reviews",
                    "m": {
                        "x": 45,
                        "y": 801,
                        "w": 230,
                        "h": 18,
                        "a": 0
                    },
                    "d": {
                        "x": 472,
                        "y": 858,
                        "w": 257,
                        "h": 18,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-4_6",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 40,
                        "w": 243,
                        "h": 16,
                        "a": 0
                    },
                    "d": {
                        "x": 424,
                        "y": 95,
                        "w": 353,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-5_0",
                    "blockId": "reviews",
                    "m": {
                        "x": 18,
                        "y": 276,
                        "w": 285,
                        "h": 222,
                        "a": 0
                    },
                    "d": {
                        "x": 259,
                        "y": 318,
                        "w": 682,
                        "h": 103,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-5_1",
                    "blockId": "reviews",
                    "m": {
                        "x": 26,
                        "y": 90,
                        "w": 269,
                        "h": 173,
                        "a": 0
                    },
                    "d": {
                        "x": 280,
                        "y": 139,
                        "w": 641,
                        "h": 160,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-5_2",
                    "blockId": "reviews",
                    "m": {
                        "x": 64,
                        "y": 512,
                        "w": 192,
                        "h": 57,
                        "a": 0
                    },
                    "d": {
                        "x": 509,
                        "y": 461,
                        "w": 182,
                        "h": 46,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-5_3",
                    "blockId": "reviews",
                    "m": {
                        "x": 63,
                        "y": 744,
                        "w": 195,
                        "h": 22,
                        "a": 0
                    },
                    "d": {
                        "x": 409,
                        "y": 797,
                        "w": 382,
                        "h": 27,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "reviews_review-5_4",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 785,
                        "w": 242,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 446,
                        "y": 843,
                        "w": 308,
                        "h": 50,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-5_5",
                    "blockId": "reviews",
                    "m": {
                        "x": 45,
                        "y": 801,
                        "w": 230,
                        "h": 18,
                        "a": 0
                    },
                    "d": {
                        "x": 472,
                        "y": 858,
                        "w": 257,
                        "h": 18,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_review-5_6",
                    "blockId": "reviews",
                    "m": {
                        "x": 39,
                        "y": 40,
                        "w": 243,
                        "h": 16,
                        "a": 0
                    },
                    "d": {
                        "x": 424,
                        "y": 95,
                        "w": 353,
                        "h": 17,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "reviews_1",
                    "blockId": "reviews",
                    "m": {
                        "x": 100,
                        "y": 592,
                        "w": 61,
                        "h": 42,
                        "a": 0
                    },
                    "d": {
                        "x": 1077,
                        "y": 267,
                        "w": 65,
                        "h": 53,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "reviews_2",
                    "blockId": "reviews",
                    "m": {
                        "x": 160,
                        "y": 592,
                        "w": 61,
                        "h": 42,
                        "a": 0
                    },
                    "d": {
                        "x": 79,
                        "y": 267,
                        "w": 65,
                        "h": 53,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_3",
                    "blockId": "reviews",
                    "m": {
                        "x": 171,
                        "y": 597,
                        "w": 43,
                        "h": 38,
                        "a": 0
                    },
                    "d": {
                        "x": 1086,
                        "y": 279,
                        "w": 51,
                        "h": 30,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "reviews_4",
                    "blockId": "reviews",
                    "m": {
                        "x": 108,
                        "y": 590,
                        "w": 43,
                        "h": 38,
                        "a": 180
                    },
                    "d": {
                        "x": 84,
                        "y": 279,
                        "w": 51,
                        "h": 30,
                        "a": 180
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "4-secrets-opt-in_0",
                    "blockId": "4-secrets-opt-in",
                    "m": {
                        "x": 52,
                        "y": 52,
                        "w": 216,
                        "h": 216,
                        "a": 0,
                        "gs": {
                            "s": 99
                        }
                    },
                    "d": {
                        "x": 0,
                        "y": 0,
                        "w": 600,
                        "h": 590,
                        "a": 0,
                        "gs": {
                            "s": 70
                        },
                        "lockH": "ls"
                    },
                    "c": {
                        "key": "j5Q3DVwuTX-tyAMehVtMig/106069/cg_27.jpg",
                        "aspect_ratio": 0.75139
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "4-secrets-opt-in_1",
                    "blockId": "4-secrets-opt-in",
                    "m": {
                        "x": 16,
                        "y": 298,
                        "w": 320,
                        "h": 73,
                        "a": -4
                    },
                    "d": {
                        "x": 538,
                        "y": 95,
                        "w": 531,
                        "h": 60,
                        "a": -4
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "4-secrets-opt-in_2",
                    "blockId": "4-secrets-opt-in",
                    "m": {
                        "x": 23,
                        "y": 352,
                        "w": 275,
                        "h": 190,
                        "a": 0
                    },
                    "d": {
                        "x": 683,
                        "y": 183,
                        "w": 472,
                        "h": 206,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "4-secrets-opt-in_3",
                    "blockId": "4-secrets-opt-in",
                    "m": {
                        "x": 72,
                        "y": 581,
                        "w": 176,
                        "h": 50,
                        "a": 0
                    },
                    "d": {
                        "x": 815,
                        "y": 424,
                        "w": 183,
                        "h": 50,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "4-secrets-opt-in_4",
                    "blockId": "4-secrets-opt-in",
                    "m": {
                        "x": 90,
                        "y": 598,
                        "w": 140,
                        "h": 20,
                        "a": 0
                    },
                    "d": {
                        "x": 835,
                        "y": 441,
                        "w": 143,
                        "h": 15,
                        "a": 0
                    }
                }, {
                    "type": "iframe",
                    "visible": "a",
                    "id": "footer_0",
                    "blockId": "footer",
                    "m": {
                        "x": 0,
                        "y": 923,
                        "w": 1064,
                        "h": 132,
                        "a": 0
                    },
                    "d": {
                        "x": 241,
                        "y": 398,
                        "w": 2395,
                        "h": 239,
                        "a": 0,
                        "lockH": "s"
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "footer_1",
                    "blockId": "footer",
                    "m": {
                        "x": 0,
                        "y": 1134,
                        "w": 320,
                        "h": 68,
                        "a": 0
                    },
                    "d": {
                        "x": 0,
                        "y": 637,
                        "w": 1200,
                        "h": 43,
                        "a": 0,
                        "lockH": "s"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_2",
                    "blockId": "footer",
                    "m": {
                        "x": 296,
                        "y": 1168,
                        "w": 20,
                        "h": 20,
                        "a": -90
                    },
                    "d": {
                        "x": 1165,
                        "y": 644,
                        "w": 24,
                        "h": 18,
                        "a": -90,
                        "lockH": "r"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_3",
                    "blockId": "footer",
                    "m": {
                        "x": 48,
                        "y": 1149,
                        "w": 207,
                        "h": 14,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 375,
                        "y": 648,
                        "w": 200,
                        "h": 27,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "footer_4",
                    "blockId": "footer",
                    "m": {
                        "x": 108,
                        "y": 653,
                        "w": 18,
                        "h": 18,
                        "a": 0
                    },
                    "d": {
                        "x": 647,
                        "y": 301,
                        "w": 19,
                        "h": 19,
                        "a": 0
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "footer_5",
                    "blockId": "footer",
                    "m": {
                        "x": 198,
                        "y": 655,
                        "w": 14,
                        "h": 14,
                        "a": 0
                    },
                    "d": {
                        "x": 740,
                        "y": 303,
                        "w": 16,
                        "h": 16,
                        "a": 0
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "footer_6",
                    "blockId": "footer",
                    "m": {
                        "x": 136,
                        "y": 653,
                        "w": 18,
                        "h": 18,
                        "a": 0
                    },
                    "d": {
                        "x": 676,
                        "y": 302,
                        "w": 18,
                        "h": 18,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_7",
                    "blockId": "footer",
                    "m": {
                        "x": 37,
                        "y": 89,
                        "w": 47,
                        "h": 21,
                        "a": 0
                    },
                    "d": {
                        "x": 91,
                        "y": 178,
                        "w": 40,
                        "h": 23,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_8",
                    "blockId": "footer",
                    "m": {
                        "x": 37,
                        "y": 123,
                        "w": 54,
                        "h": 21,
                        "a": 0
                    },
                    "d": {
                        "x": 91,
                        "y": 213,
                        "w": 58,
                        "h": 23,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_9",
                    "blockId": "footer",
                    "m": {
                        "x": 37,
                        "y": 157,
                        "w": 46,
                        "h": 21,
                        "a": 0
                    },
                    "d": {
                        "x": 91,
                        "y": 249,
                        "w": 50,
                        "h": 23,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_10",
                    "blockId": "footer",
                    "m": {
                        "x": 131,
                        "y": 89,
                        "w": 69,
                        "h": 21,
                        "a": 0
                    },
                    "d": {
                        "x": 206,
                        "y": 177,
                        "w": 97,
                        "h": 23,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_11",
                    "blockId": "footer",
                    "m": {
                        "x": 131,
                        "y": 123,
                        "w": 123,
                        "h": 21,
                        "a": 0
                    },
                    "d": {
                        "x": 206,
                        "y": 213,
                        "w": 172,
                        "h": 23,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_12",
                    "blockId": "footer",
                    "m": {
                        "x": 131,
                        "y": 157,
                        "w": 139,
                        "h": 21,
                        "a": 0
                    },
                    "d": {
                        "x": 206,
                        "y": 248,
                        "w": 152,
                        "h": 23,
                        "a": 0
                    }
                }, {
                    "type": "simple",
                    "visible": "d",
                    "id": "footer_13",
                    "blockId": "footer",
                    "m": {
                        "x": 39,
                        "y": 203,
                        "w": 183,
                        "h": 44,
                        "a": 0
                    },
                    "d": {
                        "x": 0,
                        "y": 398,
                        "w": 242,
                        "h": 239,
                        "a": 0,
                        "lockH": "l"
                    }
                }, {
                    "type": "simple",
                    "visible": "m",
                    "id": "footer_14",
                    "blockId": "footer",
                    "m": {
                        "x": 0,
                        "y": 715,
                        "w": 320,
                        "h": 210,
                        "a": 0
                    },
                    "d": {
                        "x": 0,
                        "y": 637,
                        "w": 1200,
                        "h": 43,
                        "a": 0,
                        "lockH": "s"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_15",
                    "blockId": "footer",
                    "m": {
                        "x": 54,
                        "y": 548,
                        "w": 213,
                        "h": 92,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 649,
                        "y": 179,
                        "w": 246,
                        "h": 112,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "icon",
                    "visible": "a",
                    "id": "footer_16",
                    "blockId": "footer",
                    "m": {
                        "x": 165,
                        "y": 653,
                        "w": 18,
                        "h": 18,
                        "a": 0
                    },
                    "d": {
                        "x": 706,
                        "y": 302,
                        "w": 18,
                        "h": 18,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_17",
                    "blockId": "footer",
                    "m": {
                        "x": 69,
                        "y": 748,
                        "w": 181,
                        "h": 92,
                        "a": -4
                    },
                    "d": {
                        "x": 23,
                        "y": 446,
                        "w": 189,
                        "h": 61,
                        "a": -6,
                        "lockH": "l"
                    }
                }, {
                    "type": "graphic",
                    "visible": "a",
                    "id": "footer_18",
                    "blockId": "footer",
                    "m": {
                        "x": 32,
                        "y": 208,
                        "w": 256,
                        "h": 266,
                        "a": 0,
                        "gs": {
                            "s": 50
                        }
                    },
                    "d": {
                        "x": 925,
                        "y": 54,
                        "w": 224,
                        "h": 289,
                        "a": 0,
                        "gs": {
                            "s": 50,
                            "t": "cover",
                            "p": 130
                        }
                    },
                    "c": {
                        "key": "Y_X02sk-SO-3XSjA1TvN3g/106069/facetune_26-05-2021-14-58-00.jpg",
                        "aspect_ratio": 1.50037
                    }
                }, {
                    "type": "simple",
                    "visible": "a",
                    "id": "footer_19",
                    "blockId": "footer",
                    "m": {
                        "x": 55,
                        "y": 846,
                        "w": 208,
                        "h": 44,
                        "a": 0
                    },
                    "d": {
                        "x": 22,
                        "y": 572,
                        "w": 199,
                        "h": 39,
                        "a": 0,
                        "lockH": "l"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_20",
                    "blockId": "footer",
                    "m": {
                        "x": 60,
                        "y": 859,
                        "w": 199,
                        "h": 22,
                        "a": 0
                    },
                    "d": {
                        "x": 24,
                        "y": 583,
                        "w": 194,
                        "h": 18,
                        "a": 0,
                        "lockH": "l"
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_21",
                    "blockId": "footer",
                    "m": {
                        "x": 22,
                        "y": 505,
                        "w": 283,
                        "h": 33,
                        "a": 0
                    },
                    "d": {
                        "x": 647,
                        "y": 83,
                        "w": 260,
                        "h": 89,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_22",
                    "blockId": "footer",
                    "m": {
                        "x": 35,
                        "y": 39,
                        "w": 198,
                        "h": 29,
                        "a": 0
                    },
                    "d": {
                        "x": 91,
                        "y": 110,
                        "w": 296,
                        "h": 48,
                        "a": 0
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_23",
                    "blockId": "footer",
                    "m": {
                        "x": 231,
                        "y": 1148,
                        "w": 42,
                        "h": 14,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 574,
                        "y": 648,
                        "w": 50,
                        "h": 27,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_24",
                    "blockId": "footer",
                    "m": {
                        "x": 69,
                        "y": 1167,
                        "w": 49,
                        "h": 15,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 620,
                        "y": 648,
                        "w": 50,
                        "h": 27,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_25",
                    "blockId": "footer",
                    "m": {
                        "x": 116,
                        "y": 1167,
                        "w": 65,
                        "h": 14,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 673,
                        "y": 648,
                        "w": 79,
                        "h": 27,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_26",
                    "blockId": "footer",
                    "m": {
                        "x": 182,
                        "y": 1167,
                        "w": 70,
                        "h": 13,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    },
                    "d": {
                        "x": 747,
                        "y": 648,
                        "w": 79,
                        "h": 27,
                        "a": 0,
                        "trIn": {
                            "cl": "fadeIn",
                            "d": "0.5",
                            "dl": "0"
                        }
                    }
                }, {
                    "type": "text",
                    "visible": "a",
                    "id": "footer_27",
                    "blockId": "footer",
                    "m": {
                        "x": 69,
                        "y": 787,
                        "w": 181,
                        "h": 47,
                        "a": -4
                    },
                    "d": {
                        "x": 26,
                        "y": 493,
                        "w": 189,
                        "h": 61,
                        "a": -6,
                        "lockH": "l"
                    }
                }, {
                    "type": "iframe",
                    "visible": "m",
                    "id": "footer_28",
                    "blockId": "footer",
                    "m": {
                        "x": -320,
                        "y": 1029,
                        "w": 1064,
                        "h": 108,
                        "a": 0
                    },
                    "d": {
                        "x": 241,
                        "y": 398,
                        "w": 2395,
                        "h": 239,
                        "a": 0,
                        "lockH": "s"
                    }
                }]
            }
        </script> -->

        <!-- <script id="si-jquery" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/showit-lib.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/showit.min.js"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/showit.css" /> -->
        <!-- <style id="si-page-css">
            html.d {
                background-color: rgba(255, 255, 255, 1);
            }

            html.m {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .st-d-title,
            .d .se-wpt h1 {
                color: rgba(69, 68, 62, 1);
                line-height: 1;
                letter-spacing: 0em;
                font-size: 50px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .d .se-wpt h1 {
                margin-bottom: 30px;
            }

            .d .st-d-title.se-rc a {
                color: rgba(69, 68, 62, 1);
            }

            .d .st-d-title.se-rc a:hover {
                text-decoration: underline;
                color: rgba(69, 68, 62, 1);
                opacity: 0.8;
            }

            .m .st-m-title,
            .m .se-wpt h1 {
                color: rgba(69, 68, 62, 1);
                line-height: 1;
                letter-spacing: 0em;
                font-size: 38px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .se-wpt h1 {
                margin-bottom: 20px;
            }

            .m .st-m-title.se-rc a {
                color: rgba(69, 68, 62, 1);
            }

            .m .st-m-title.se-rc a:hover {
                text-decoration: underline;
                color: rgba(69, 68, 62, 1);
                opacity: 0.8;
            }

            .d .st-d-heading,
            .d .se-wpt h2 {
                color: rgba(69, 68, 62, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.2em;
                font-size: 14px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .se-wpt h2 {
                margin-bottom: 24px;
            }

            .d .st-d-heading.se-rc a {
                color: rgba(69, 68, 62, 1);
            }

            .d .st-d-heading.se-rc a:hover {
                text-decoration: underline;
                color: rgba(69, 68, 62, 1);
            }

            .m .st-m-heading,
            .m .se-wpt h2 {
                color: rgba(69, 68, 62, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.2em;
                font-size: 14px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .se-wpt h2 {
                margin-bottom: 14px;
            }

            .m .st-m-heading.se-rc a {
                color: rgba(69, 68, 62, 1);
            }

            .m .st-m-heading.se-rc a:hover {
                text-decoration: underline;
                color: rgba(69, 68, 62, 1);
            }

            .d .st-d-subheading,
            .d .se-wpt h3 {
                color: rgba(204, 174, 171, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.2em;
                font-size: 14px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .se-wpt h3 {
                margin-bottom: 18px;
            }

            .d .st-d-subheading.se-rc a {
                color: rgba(204, 174, 171, 1);
            }

            .d .st-d-subheading.se-rc a:hover {
                text-decoration: underline;
                color: rgba(204, 174, 171, 1);
                opacity: 0.8;
            }

            .m .st-m-subheading,
            .m .se-wpt h3 {
                color: rgba(204, 174, 171, 1);
                text-transform: uppercase;
                line-height: 1.8;
                letter-spacing: 0.2em;
                font-size: 12px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .se-wpt h3 {
                margin-bottom: 18px;
            }

            .m .st-m-subheading.se-rc a {
                color: rgba(204, 174, 171, 1);
            }

            .m .st-m-subheading.se-rc a:hover {
                text-decoration: underline;
                color: rgba(204, 174, 171, 1);
                opacity: 0.8;
            }

            .d .st-d-paragraph {
                color: rgba(69, 68, 62, 1);
                line-height: 1.9;
                letter-spacing: 0.025em;
                font-size: 14px;
                text-align: left;
                font-family: 'Montserrat';
                font-weight: 500;
                font-style: normal;
            }

            .d .se-wpt p {
                margin-bottom: 16px;
            }

            .d .st-d-paragraph.se-rc a {
                color: rgba(69, 68, 62, 1);
            }

            .d .st-d-paragraph.se-rc a:hover {
                text-decoration: underline;
                color: rgba(69, 68, 62, 1);
                opacity: 0.8;
            }

            .m .st-m-paragraph {
                color: rgba(69, 68, 62, 1);
                line-height: 1.8;
                letter-spacing: 0.025em;
                font-size: 13px;
                text-align: left;
                font-family: 'Montserrat';
                font-weight: 500;
                font-style: normal;
            }

            .m .se-wpt p {
                margin-bottom: 16px;
            }

            .m .st-m-paragraph.se-rc a {
                color: rgba(69, 68, 62, 1);
            }

            .m .st-m-paragraph.se-rc a:hover {
                text-decoration: underline;
                color: rgba(69, 68, 62, 1);
                opacity: 0.8;
            }

            .sib-sticky-menu-open {
                z-index: 15;
            }

            .m .sib-sticky-menu-open {
                height: 500px;
                display: none;
            }

            .d .sib-sticky-menu-open {
                height: 661px;
                display: none;
            }

            .m .sib-sticky-menu-open .ss-bg {
                background-color: rgba(204, 174, 171, 1);
            }

            .d .sib-sticky-menu-open .ss-bg {
                background-color: transparent;
            }

            .d .sib-sticky-menu-open.sb-nd-wH .sc {
                height: 661px;
            }

            .d .sie-sticky-menu-open_0 {
                left: 517px;
                top: 0px;
                width: 683px;
                height: 662px;
            }

            .m .sie-sticky-menu-open_0 {
                left: 48px;
                top: 75px;
                width: 224px;
                height: 350px;
                display: none;
            }

            .d .sie-sticky-menu-open_0 .se-simple {
                background-color: rgba(229, 219, 216, 1);
            }

            .m .sie-sticky-menu-open_0 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-open_1 {
                left: 884px;
                top: 455px;
                width: 250px;
                height: 1px;
            }

            .m .sie-sticky-menu-open_1 {
                left: 35px;
                top: 199px;
                width: 250px;
                height: 1px;
            }

            .d .sie-sticky-menu-open_1 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .m .sie-sticky-menu-open_1 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-open_2 {
                left: 885px;
                top: 472px;
                width: 153px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_2 {
                left: 35px;
                top: 348px;
                width: 157px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_2-text {
                color: rgba(69, 68, 62, 1);
                text-transform: uppercase;
                text-align: left;
            }

            .d .sie-sticky-menu-open_3 {
                left: 884px;
                top: 371px;
                width: 187px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_3 {
                left: 35px;
                top: 394px;
                width: 157px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_3-text {
                color: rgba(69, 68, 62, 1);
                text-align: left;
            }

            .d .sie-sticky-menu-open_4 {
                left: 884px;
                top: 405px;
                width: 250px;
                height: 1px;
            }

            .m .sie-sticky-menu-open_4 {
                left: 35px;
                top: 245px;
                width: 250px;
                height: 1px;
            }

            .d .sie-sticky-menu-open_4 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .m .sie-sticky-menu-open_4 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-open_5 {
                left: 884px;
                top: 354px;
                width: 250px;
                height: 1px;
            }

            .m .sie-sticky-menu-open_5 {
                left: 35px;
                top: 290px;
                width: 250px;
                height: 1px;
            }

            .d .sie-sticky-menu-open_5 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .m .sie-sticky-menu-open_5 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-open_6 {
                left: 884px;
                top: 321px;
                width: 77px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_6 {
                left: 35px;
                top: 302px;
                width: 157px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_6-text {
                color: rgba(69, 68, 62, 1);
                text-align: left;
            }

            .d .sie-sticky-menu-open_7 {
                left: 884px;
                top: 304px;
                width: 250px;
                height: 1px;
            }

            .m .sie-sticky-menu-open_7 {
                left: 35px;
                top: 336px;
                width: 250px;
                height: 1px;
            }

            .d .sie-sticky-menu-open_7 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .m .sie-sticky-menu-open_7 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-open_8 {
                left: 884px;
                top: 270px;
                width: 77px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_8 {
                left: 35px;
                top: 257px;
                width: 157px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_8-text {
                color: rgba(69, 68, 62, 1);
                text-align: left;
            }

            .d .sie-sticky-menu-open_9 {
                left: 884px;
                top: 253px;
                width: 250px;
                height: 1px;
            }

            .m .sie-sticky-menu-open_9 {
                left: 35px;
                top: 381px;
                width: 250px;
                height: 1px;
            }

            .d .sie-sticky-menu-open_9 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .m .sie-sticky-menu-open_9 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-open_10 {
                left: 884px;
                top: 220px;
                width: 77px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_10 {
                left: 35px;
                top: 212px;
                width: 157px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_10-text {
                color: rgba(69, 68, 62, 1);
                text-align: left;
            }

            .d .sie-sticky-menu-open_11 {
                left: 884px;
                top: 203px;
                width: 250px;
                height: 1px;
            }

            .m .sie-sticky-menu-open_11 {
                left: 35px;
                top: 426px;
                width: 250px;
                height: 1px;
            }

            .d .sie-sticky-menu-open_11 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .m .sie-sticky-menu-open_11 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-open_12 {
                left: 884px;
                top: 170px;
                width: 77px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_12 {
                left: 35px;
                top: 167px;
                width: 157px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_12-text {
                color: rgba(69, 68, 62, 1);
                text-align: left;
            }

            .d .sie-sticky-menu-open_13 {
                left: 883px;
                top: 91px;
                width: 263px;
                height: 48px;
            }

            .m .sie-sticky-menu-open_13 {
                left: 35px;
                top: 99px;
                width: 211px;
                height: 53px;
            }

            .d .sie-sticky-menu-open_13-text {
                color: rgba(255, 255, 255, 1);
                text-transform: none;
                letter-spacing: 0em;
                font-size: 41px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-sticky-menu-open_13-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                letter-spacing: 0em;
                font-size: 30px;
                text-align: left;
            }

            .d .sie-sticky-menu-open_14 {
                left: 1152px;
                top: 7px;
                width: 40px;
                height: 45px;
            }

            .m .sie-sticky-menu-open_14 {
                left: 272px;
                top: 12px;
                width: 35px;
                height: 37px;
            }

            .d .sie-sticky-menu-open_14 svg {
                fill: rgba(69, 68, 62, 1);
            }

            .m .sie-sticky-menu-open_14 svg {
                fill: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-open_15 {
                left: 592px;
                top: 569px;
                width: 19px;
                height: 20px;
            }

            .m .sie-sticky-menu-open_15 {
                left: 34px;
                top: 482px;
                width: 21px;
                height: 22px;
            }

            .d .sie-sticky-menu-open_15:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-sticky-menu-open_15:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-sticky-menu-open_15 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .m .sie-sticky-menu-open_15 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .d .sie-sticky-menu-open_15 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .m .sie-sticky-menu-open_15 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .d .sie-sticky-menu-open_16 {
                left: 620px;
                top: 567px;
                width: 22px;
                height: 23px;
            }

            .m .sie-sticky-menu-open_16 {
                left: 73px;
                top: 482px;
                width: 21px;
                height: 22px;
            }

            .d .sie-sticky-menu-open_16:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-sticky-menu-open_16:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-sticky-menu-open_16 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .m .sie-sticky-menu-open_16 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .d .sie-sticky-menu-open_16 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .m .sie-sticky-menu-open_16 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .d .sie-sticky-menu-open_17 {
                left: 653px;
                top: 569px;
                width: 19px;
                height: 20px;
            }

            .m .sie-sticky-menu-open_17 {
                left: 116px;
                top: 482px;
                width: 21px;
                height: 22px;
            }

            .d .sie-sticky-menu-open_17:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-sticky-menu-open_17:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-sticky-menu-open_17 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .m .sie-sticky-menu-open_17 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .d .sie-sticky-menu-open_17 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .m .sie-sticky-menu-open_17 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .d .sie-sticky-menu-open_18 {
                left: 685px;
                top: 571px;
                width: 17px;
                height: 16px;
            }

            .m .sie-sticky-menu-open_18 {
                left: 160px;
                top: 486px;
                width: 18px;
                height: 17px;
            }

            .d .sie-sticky-menu-open_18:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-sticky-menu-open_18:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-sticky-menu-open_18 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .m .sie-sticky-menu-open_18 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .d .sie-sticky-menu-open_18 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .m .sie-sticky-menu-open_18 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .d .sie-sticky-menu-open_19 {
                left: 885px;
                top: 527px;
                width: 177px;
                height: 42px;
            }

            .m .sie-sticky-menu-open_19 {
                left: 48px;
                top: 6px;
                width: 224px;
                height: 28px;
            }

            .d .sie-sticky-menu-open_19 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .m .sie-sticky-menu-open_19 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-open_20 {
                left: 907px;
                top: 540px;
                width: 134px;
                height: 23px;
            }

            .m .sie-sticky-menu-open_20 {
                left: 19px;
                top: 18px;
                width: 146px;
                height: 37px;
                display: none;
            }

            .d .sie-sticky-menu-open_20:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-sticky-menu-open_20:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-sticky-menu-open_20-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-sticky-menu-open_20-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-sticky-menu-open_20-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-sticky-menu-open_20-text {
                letter-spacing: 0.1em;
                font-size: 14px;
                text-align: left;
            }

            .d .sie-sticky-menu-open_21 {
                left: 886px;
                top: 421px;
                width: 232px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_21 {
                left: 35px;
                top: 302px;
                width: 157px;
                height: 26px;
            }

            .m .sie-sticky-menu-open_21-text {
                color: rgba(69, 68, 62, 1);
                text-align: left;
            }

            .d .sie-sticky-menu-open_22 {
                left: 571px;
                top: 13px;
                width: 59px;
                height: 59px;
                display: none;
            }

            .m .sie-sticky-menu-open_22 {
                left: 0px;
                top: 48px;
                width: 320px;
                height: 162px;
            }

            .d .sie-sticky-menu-open_22 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-sticky-menu-open_22 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 60% 60%;
            }

            .d .sie-sticky-menu-open_23 {
                left: 594px;
                top: 95px;
                width: 229px;
                height: 306px;
            }

            .m .sie-sticky-menu-open_23 {
                left: 48px;
                top: 101px;
                width: 224px;
                height: 298px;
            }

            .d .sie-sticky-menu-open_23 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 60% 60%;
            }

            .m .sie-sticky-menu-open_23 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-sticky-menu-open_24 {
                left: 471px;
                top: 75px;
                width: 299px;
                height: 113px;
            }

            .m .sie-sticky-menu-open_24 {
                left: 73px;
                top: 236px;
                width: 174px;
                height: 29px;
            }

            .d .sie-sticky-menu-open_24-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                line-height: 1.5;
                letter-spacing: 0em;
                font-size: 35px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-sticky-menu-open_25 {
                left: 594px;
                top: 423px;
                width: 239px;
                height: 128px;
            }

            .m .sie-sticky-menu-open_25 {
                left: 29px;
                top: 82px;
                width: 270px;
                height: 217px;
            }

            .m .sie-sticky-menu-open_25-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 30px;
                text-align: left;
            }

            .sib-sticky-menu-closed {
                z-index: 2;
            }

            .m .sib-sticky-menu-closed {
                height: 40px;
                display: none;
            }

            .d .sib-sticky-menu-closed {
                height: 750px;
                display: none;
            }

            .m .sib-sticky-menu-closed .ss-bg {
                background-color: transparent;
            }

            .d .sib-sticky-menu-closed .ss-bg {
                background-color: transparent;
            }

            .d .sib-sticky-menu-closed.sb-nd-wH .sc {
                height: 750px;
            }

            .d .sie-sticky-menu-closed_0 {
                left: 1142px;
                top: 15px;
                width: 36px;
                height: 30px;
            }

            .m .sie-sticky-menu-closed_0 {
                left: 3px;
                top: 7px;
                width: 22px;
                height: 21px;
            }

            .d .sie-sticky-menu-closed_0 svg {
                fill: rgba(69, 68, 62, 1);
            }

            .m .sie-sticky-menu-closed_0 svg {
                fill: rgba(69, 68, 62, 1);
            }

            .d .sie-sticky-menu-closed_1 {
                left: 1144px;
                top: 686px;
                width: 47px;
                height: 47px;
            }

            .m .sie-sticky-menu-closed_1 {
                left: 276px;
                top: 398px;
                width: 39px;
                height: 22px;
            }

            .d .sie-sticky-menu-closed_1 svg {
                fill: rgba(69, 68, 62, 1);
            }

            .m .sie-sticky-menu-closed_1 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .sib-mobile-menu {
                z-index: 25;
            }

            .m .sib-mobile-menu {
                height: 546px;
                display: none;
            }

            .d .sib-mobile-menu {
                height: 85px;
                display: none;
            }

            .m .sib-mobile-menu .ss-bg {
                background-color: rgba(229, 219, 216, 1);
            }

            .d .sib-mobile-menu .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .m .sib-mobile-menu.sb-nm-wH .sc {
                height: 546px;
            }

            .d .sie-mobile-menu_0 {
                left: 360px;
                top: 26px;
                width: 480px;
                height: 34px;
                display: none;
            }

            .m .sie-mobile-menu_0 {
                left: 0px;
                top: 3px;
                width: 320px;
                height: 45px;
            }

            .d .sie-mobile-menu_0 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .m .sie-mobile-menu_0 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-mobile-menu_1 {
                left: 151.755px;
                top: 273.459px;
                width: 25.756px;
                height: 26.48px;
                display: none;
            }

            .m .sie-mobile-menu_1 {
                left: 34px;
                top: 482px;
                width: 21px;
                height: 22px;
            }

            .d .sie-mobile-menu_1:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_1:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_1 svg {
                fill: rgba(210, 190, 183, 1);
            }

            .m .sie-mobile-menu_1 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .d .sie-mobile-menu_1 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .m .sie-mobile-menu_1 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .d .sie-mobile-menu_2 {
                left: 185.005px;
                top: 271.191px;
                width: 30.006px;
                height: 31.015px;
                display: none;
            }

            .m .sie-mobile-menu_2 {
                left: 73px;
                top: 482px;
                width: 21px;
                height: 22px;
            }

            .d .sie-mobile-menu_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_2 svg {
                fill: rgba(210, 190, 183, 1);
            }

            .m .sie-mobile-menu_2 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .d .sie-mobile-menu_2 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .m .sie-mobile-menu_2 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .d .sie-mobile-menu_3 {
                left: 225.755px;
                top: 273.459px;
                width: 25.756px;
                height: 26.48px;
                display: none;
            }

            .m .sie-mobile-menu_3 {
                left: 116px;
                top: 482px;
                width: 21px;
                height: 22px;
            }

            .d .sie-mobile-menu_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_3 svg {
                fill: rgba(210, 190, 183, 1);
            }

            .m .sie-mobile-menu_3 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .d .sie-mobile-menu_3 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .m .sie-mobile-menu_3 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .d .sie-mobile-menu_4 {
                left: 266.648px;
                top: 276.887px;
                width: 23.006px;
                height: 22.007px;
                display: none;
            }

            .m .sie-mobile-menu_4 {
                left: 160px;
                top: 486px;
                width: 18px;
                height: 17px;
            }

            .d .sie-mobile-menu_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_4 svg {
                fill: rgba(210, 190, 183, 1);
            }

            .m .sie-mobile-menu_4 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .d .sie-mobile-menu_4 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .m .sie-mobile-menu_4 svg:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
            }

            .d .sie-mobile-menu_5 {
                left: 121px;
                top: 162px;
                width: 955px;
                height: 343px;
            }

            .m .sie-mobile-menu_5 {
                left: 35px;
                top: 246px;
                width: 236px;
                height: 53px;
            }

            .d .sie-mobile-menu_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.1;
                font-size: 150px;
                text-align: center;
            }

            .m .sie-mobile-menu_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.2;
                font-size: 35px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-mobile-menu_6 {
                left: 655px;
                top: 34px;
                width: 52px;
                height: 26px;
                display: none;
            }

            .m .sie-mobile-menu_6 {
                left: 35px;
                top: 313px;
                width: 91px;
                height: 17px;
            }

            .d .sie-mobile-menu_6:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_6:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_6-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_6-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_6-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-mobile-menu_7 {
                left: 1018.6px;
                top: 34px;
                width: 77px;
                height: 26px;
                display: none;
            }

            .m .sie-mobile-menu_7 {
                left: 35px;
                top: 382px;
                width: 86px;
                height: 22px;
            }

            .d .sie-mobile-menu_7:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_7:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_7-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_7-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_7-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-mobile-menu_8 {
                left: 735.4px;
                top: 34px;
                width: 57px;
                height: 26px;
                display: none;
            }

            .m .sie-mobile-menu_8 {
                left: 35px;
                top: 348px;
                width: 75px;
                height: 22px;
            }

            .d .sie-mobile-menu_8:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_8:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_8-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_8-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_8-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-mobile-menu_10 {
                left: 1018.6px;
                top: 34px;
                width: 77px;
                height: 26px;
                display: none;
            }

            .m .sie-mobile-menu_10 {
                left: 148px;
                top: 382px;
                width: 111px;
                height: 22px;
            }

            .d .sie-mobile-menu_10:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_10:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_10-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_10-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_10-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-mobile-menu_11 {
                left: 820.8px;
                top: 34px;
                width: 71px;
                height: 26px;
                display: none;
            }

            .m .sie-mobile-menu_11 {
                left: 148px;
                top: 313px;
                width: 155px;
                height: 22px;
            }

            .d .sie-mobile-menu_11:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_11:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_11-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_11-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_11-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-mobile-menu_12 {
                left: 1018.6px;
                top: 34px;
                width: 77px;
                height: 26px;
                display: none;
            }

            .m .sie-mobile-menu_12 {
                left: 35px;
                top: 417px;
                width: 60px;
                height: 22px;
            }

            .d .sie-mobile-menu_12:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_12:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_12-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_12-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_12-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-mobile-menu_13 {
                left: 820.8px;
                top: 34px;
                width: 71px;
                height: 26px;
                display: none;
            }

            .m .sie-mobile-menu_13 {
                left: 148px;
                top: 348px;
                width: 155px;
                height: 22px;
            }

            .d .sie-mobile-menu_13:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mobile-menu_13:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mobile-menu_13-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_13-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mobile-menu_13-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-mobile-menu_14 {
                left: 561px;
                top: 13px;
                width: 79px;
                height: 59px;
            }

            .m .sie-mobile-menu_14 {
                left: -5px;
                top: -9px;
                width: 327px;
                height: 225px;
            }

            .d .sie-mobile-menu_14 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-mobile-menu_14 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-mobile-menu_15 {
                left: 550px;
                top: -28px;
                width: 100px;
                height: 100px;
                display: none;
            }

            .m .sie-mobile-menu_15 {
                left: 11px;
                top: 13px;
                width: 27px;
                height: 24px;
            }

            .d .sie-mobile-menu_15 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-mobile-menu_15 svg {
                fill: rgba(69, 68, 62, 1);
            }

            .sib-mobile-menu-closed {
                z-index: 4;
            }

            .m .sib-mobile-menu-closed {
                height: 50px;
            }

            .d .sib-mobile-menu-closed {
                height: 222px;
                display: none;
            }

            .m .sib-mobile-menu-closed .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sib-mobile-menu-closed .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-mobile-menu-closed_0 {
                left: 550px;
                top: -28px;
                width: 100px;
                height: 100px;
                display: none;
            }

            .m .sie-mobile-menu-closed_0 {
                left: 280px;
                top: 8px;
                width: 24px;
                height: 37px;
            }

            .d .sie-mobile-menu-closed_0 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-mobile-menu-closed_0 svg {
                fill: rgba(142, 141, 137, 1);
            }

            .d .sie-mobile-menu-closed_1 {
                left: 468px;
                top: 13px;
                width: 264px;
                height: 59px;
            }

            .m .sie-mobile-menu-closed_1 {
                left: 6px;
                top: 5px;
                width: 171px;
                height: 42px;
            }

            .d .sie-mobile-menu-closed_1 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .m .sie-mobile-menu-closed_1 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .d .sie-mobile-menu-closed_2 {
                left: 468px;
                top: 13px;
                width: 264px;
                height: 59px;
            }

            .m .sie-mobile-menu-closed_2 {
                left: 6px;
                top: 5px;
                width: 171px;
                height: 42px;
            }

            .d .sie-mobile-menu-closed_2 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .m .sie-mobile-menu-closed_2 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .sib-menu {
                z-index: 12;
            }

            .m .sib-menu {
                height: 40px;
                display: none;
            }

            .d .sib-menu {
                height: 106px;
            }

            .m .sib-menu .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sib-menu .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-menu_0 {
                left: 320px;
                top: 45px;
                width: 46px;
                height: 19px;
            }

            .m .sie-menu_0 {
                left: 19px;
                top: 18px;
                width: 146px;
                height: 37px;
                display: none;
            }

            .d .sie-menu_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-menu_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-menu_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-menu_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-menu_0-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-menu_0-text {
                letter-spacing: 0.1em;
                font-size: 14px;
                text-align: left;
            }

            .d .sie-menu_1 {
                left: 21px;
                top: 2px;
                width: 260px;
                height: 101px;
            }

            .m .sie-menu_1 {
                left: 48px;
                top: 6px;
                width: 224px;
                height: 28px;
            }

            .d .sie-menu_1 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .m .sie-menu_1 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .d .sie-menu_2 {
                left: 1016px;
                top: 35px;
                width: 147px;
                height: 36px;
            }

            .m .sie-menu_2 {
                left: 48px;
                top: 6px;
                width: 224px;
                height: 28px;
            }

            .d .sie-menu_2 .se-simple {
                background-color: rgba(210, 190, 183, 0.75);
            }

            .m .sie-menu_2 .se-simple {
                background-color: rgba(69, 68, 62, 1);
            }

            .d .sie-menu_3 {
                left: 1025px;
                top: 45px;
                width: 134px;
                height: 23px;
            }

            .m .sie-menu_3 {
                left: 19px;
                top: 18px;
                width: 146px;
                height: 37px;
                display: none;
            }

            .d .sie-menu_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-menu_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-menu_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-menu_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-menu_3-text {
                color: rgba(69, 68, 62, 1);
                font-size: 9px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-menu_3-text {
                letter-spacing: 0.1em;
                font-size: 14px;
                text-align: left;
            }

            .d .sie-menu_4 {
                left: 666px;
                top: 45px;
                width: 141px;
                height: 23px;
            }

            .m .sie-menu_4 {
                left: 19px;
                top: 18px;
                width: 146px;
                height: 37px;
                display: none;
            }

            .d .sie-menu_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-menu_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-menu_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-menu_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-menu_4-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-menu_4-text {
                letter-spacing: 0.1em;
                font-size: 14px;
                text-align: left;
            }

            .d .sie-menu_5 {
                left: 561px;
                top: 45px;
                width: 75px;
                height: 23px;
            }

            .m .sie-menu_5 {
                left: 19px;
                top: 18px;
                width: 146px;
                height: 37px;
                display: none;
            }

            .d .sie-menu_5:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-menu_5:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-menu_5-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-menu_5-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-menu_5-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-menu_5-text {
                letter-spacing: 0.1em;
                font-size: 14px;
                text-align: left;
            }

            .d .sie-menu_6 {
                left: 483px;
                top: 45px;
                width: 48px;
                height: 23px;
            }

            .m .sie-menu_6 {
                left: 19px;
                top: 18px;
                width: 146px;
                height: 37px;
                display: none;
            }

            .d .sie-menu_6:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-menu_6:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-menu_6-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-menu_6-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-menu_6-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-menu_6-text {
                letter-spacing: 0.1em;
                font-size: 14px;
                text-align: left;
            }

            .d .sie-menu_7 {
                left: 837px;
                top: 45px;
                width: 156px;
                height: 18px;
            }

            .m .sie-menu_7 {
                left: 19px;
                top: 18px;
                width: 146px;
                height: 37px;
                display: none;
            }

            .d .sie-menu_7:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-menu_7:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-menu_7-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-menu_7-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-menu_7-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-menu_7-text {
                letter-spacing: 0.1em;
                font-size: 14px;
                text-align: left;
            }

            .d .sie-menu_8 {
                left: 396px;
                top: 45px;
                width: 57px;
                height: 16px;
            }

            .m .sie-menu_8 {
                left: 19px;
                top: 18px;
                width: 146px;
                height: 37px;
                display: none;
            }

            .d .sie-menu_8:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-menu_8:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-menu_8-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-menu_8-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-menu_8-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-menu_8-text {
                letter-spacing: 0.1em;
                font-size: 14px;
                text-align: left;
            }

            .d .sie-menu_9 {
                left: 21px;
                top: 2px;
                width: 260px;
                height: 101px;
            }

            .m .sie-menu_9 {
                left: 48px;
                top: 6px;
                width: 224px;
                height: 28px;
            }

            .d .sie-menu_9 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .m .sie-menu_9 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .d .sie-menu_10 {
                left: 21px;
                top: 2px;
                width: 260px;
                height: 101px;
            }

            .m .sie-menu_10 {
                left: 48px;
                top: 6px;
                width: 224px;
                height: 28px;
            }

            .d .sie-menu_10 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .m .sie-menu_10 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .sib-home-hero {
                z-index: 4;
            }

            .m .sib-home-hero {
                height: 446px;
            }

            .d .sib-home-hero {
                height: 650px;
            }

            .m .sib-home-hero .ss-bg {
                background-color: rgba(67, 65, 59, 1);
            }

            .d .sib-home-hero .ss-bg {
                background-color: rgba(67, 65, 59, 1);
            }

            .m .sib-home-hero .sis-home-hero_photo-1 {
                background-color: rgba(0, 0, 0, 1);
            }

            .d .sib-home-hero .sis-home-hero_photo-1 {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-home-hero_photo-1_0 {
                left: 43px;
                top: 103px;
                width: 469px;
                height: 281px;
            }

            .m .sie-home-hero_photo-1_0 {
                left: 23px;
                top: 212px;
                width: 277px;
                height: 193px;
            }

            .d .sie-home-hero_photo-1_0-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.1;
                letter-spacing: 0.01em;
                font-size: 42px;
                font-family: 'MADE Mirage Medium';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-home-hero_photo-1_0-text {
                color: rgba(255, 255, 255, 1);
                font-size: 28px;
                font-family: 'MADE Mirage Medium';
                font-weight: 400;
                font-style: normal;
            }

            .sib-brand-bio-1 {
                z-index: 4;
            }

            .m .sib-brand-bio-1 {
                height: 1071px;
            }

            .d .sib-brand-bio-1 {
                height: 650px;
            }

            .m .sib-brand-bio-1 .ss-bg {
                background-color: rgba(247, 245, 244, 1);
            }

            .d .sib-brand-bio-1 .ss-bg {
                background-color: rgba(247, 245, 244, 1);
            }

            .d .sie-brand-bio-1_0 {
                left: 585px;
                top: 62px;
                width: 576px;
                height: 61px;
            }

            .m .sie-brand-bio-1_0 {
                left: 25px;
                top: 332px;
                width: 283px;
                height: 129px;
                display: none;
            }

            .d .sie-brand-bio-1_0-text {
                color: rgba(189, 153, 149, 1);
                line-height: 1.2;
                font-size: 44px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-brand-bio-1_0-text {
                color: rgba(189, 153, 149, 1);
                line-height: 1.1;
                font-size: 30px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-brand-bio-1_1 {
                left: 595px;
                top: 65px;
                width: 576px;
                height: 61px;
                display: none;
            }

            .m .sie-brand-bio-1_1 {
                left: 25px;
                top: 311px;
                width: 283px;
                height: 129px;
            }

            .d .sie-brand-bio-1_1-text {
                color: rgba(189, 153, 149, 1);
                line-height: 1.2;
                font-size: 44px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-brand-bio-1_1-text {
                color: rgba(189, 153, 149, 1);
                line-height: 1.1;
                font-size: 35px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-brand-bio-1_2 {
                left: 585px;
                top: 137px;
                width: 548px;
                height: 362px;
            }

            .m .sie-brand-bio-1_2 {
                left: 25px;
                top: 405px;
                width: 270px;
                height: 580px;
            }

            .d .sie-brand-bio-1_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-brand-bio-1_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-brand-bio-1_2-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-brand-bio-1_2-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-brand-bio-1_2-text {
                font-size: 14px;
            }

            .d .sie-brand-bio-1_2-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-brand-bio-1_3 {
                left: 92px;
                top: -77px;
                width: 431px;
                height: 571px;
            }

            .m .sie-brand-bio-1_3 {
                left: 105px;
                top: -27px;
                width: 229px;
                height: 305px;
            }

            .d .sie-brand-bio-1_3 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 100% 100%;
            }

            .m .sie-brand-bio-1_3 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-brand-bio-1_4 {
                left: 308px;
                top: 250px;
                width: 161px;
                height: 395px;
            }

            .m .sie-brand-bio-1_4 {
                left: -22px;
                top: 61px;
                width: 209px;
                height: 295px;
            }

            .d .sie-brand-bio-1_4 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-brand-bio-1_4 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-brand-bio-1_5 {

                top: 565px;
                width: 241px;
                height: 52px;
            }

            .m .sie-brand-bio-1_5 {
                left: 45px;
                top: 1006px;
                width: 231px;
                height: 50px;
            }

            .d .sie-brand-bio-1_5 .se-simple {
                background-color: rgba(204, 174, 171, 1);
            }

            .m .sie-brand-bio-1_5 .se-simple {
                background-color: rgba(204, 174, 171, 1);
            }

            .d .sie-brand-bio-1_6 {
                top: 565px;
                width: 241px;
                height: 52px;
                line-height: 52px;
            }

            .m .sie-brand-bio-1_6 {
                left: 59px;
                top: 1023px;
                width: 206px;
                height: 20px;
            }

            .d .sie-brand-bio-1_6:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-brand-bio-1_6:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-brand-bio-1_6-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-brand-bio-1_6-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-brand-bio-1_6-text {
                color: rgba(255, 255, 255, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Commuters Semi';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-brand-bio-1_6-text {
                color: rgba(255, 255, 255, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sib-spacer {
                height: 78px;
                display: none;
            }

            .d .sib-spacer {
                height: 31px;
            }

            .m .sib-spacer .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sib-spacer .ss-bg {
                background-color: rgba(247, 245, 244, 1);
            }

            .m .sib-press {
                height: 239px;
            }

            .d .sib-press {
                height: 183px;
            }

            .m .sib-press .ss-bg {
                background-color: rgba(247, 245, 244, 1);
            }

            .d .sib-press .ss-bg {
                background-color: rgba(247, 245, 244, 1);
            }

            .d .sie-press_0 {
                left: 298px;
                top: 56px;
                width: 114px;
                height: 42px;
                opacity: 0.4;
            }

            .m .sie-press_0 {
                left: 42px;
                top: 147px;
                width: 87px;
                height: 38px;
                opacity: 0.4;
            }

            .d .sie-press_0 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .m .sie-press_0 .se-img {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: contain;
            }

            .d .sie-press_1 {
                left: 460px;
                top: 61px;
                width: 118px;
                height: 32px;
                opacity: 0.4;
            }

            .m .sie-press_1 {
                left: 33px;
                top: 92px;
                width: 102px;
                height: 27px;
                opacity: 0.4;
            }

            .d .sie-press_1 .se-img {
                background-repeat: no-repeat;
                background-size: contain;
                background-position: 50%;
            }

            .m .sie-press_1 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-press_2 {
                left: 954px;
                top: 57px;
                width: 115px;
                height: 39px;
                opacity: 0.4;
            }

            .m .sie-press_2 {
                left: 174px;
                top: 149px;
                width: 113px;
                height: 36px;
                opacity: 0.4;
            }

            .d .sie-press_2 .se-img {
                background-repeat: no-repeat;
                background-size: contain;
                background-position: 50%;
            }

            .m .sie-press_2 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-press_3 {
                left: 626px;
                top: 34px;
                width: 119px;
                height: 90px;
                opacity: 0.4;
            }

            .m .sie-press_3 {
                left: 196px;
                top: 80px;
                width: 68px;
                height: 57px;
                opacity: 0.4;
            }

            .d .sie-press_3 .se-img {
                background-repeat: no-repeat;
                background-size: contain;
                background-position: 50%;
            }

            .m .sie-press_3 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-press_4 {
                left: 131px;
                top: 51px;
                width: 117px;
                height: 39px;
            }

            .m .sie-press_4 {
                left: 67px;
                top: 45px;
                width: 186px;
                height: 21px;
            }

            .d .sie-press_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-press_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-press_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-press_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-press_4-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                line-height: 1.3;
                letter-spacing: 0.05em;
                font-size: 16px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-press_4-text {
                color: rgba(67, 65, 59, 1);
                text-transform: none;
                line-height: 1.3;
                letter-spacing: 0.05em;
                font-size: 15px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-press_4-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-press_5 {
                left: 794px;
                top: 48px;
                width: 114px;
                height: 57px;
                opacity: 0.4;
            }

            .m .sie-press_5 {
                left: 33px;
                top: 147px;
                width: 87px;
                height: 44px;
                opacity: 0.4;
                display: none;
            }

            .d .sie-press_5 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-press_5 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sib-from-the-blog {
                height: 1874px;
            }

            .d .sib-from-the-blog {
                height: 1082px;
            }

            .m .sib-from-the-blog .ss-bg {
                background-color: rgba(210, 190, 183, 1);
            }

            .d .sib-from-the-blog .ss-bg {
                background-color: rgba(210, 190, 183, 0.9);
            }

            .d .sib-from-the-blog.sb-nd-dH .sc {
                height: 1082px;
            }

            .d .sie-from-the-blog_0 {
                left: 514px;
                top: 957px;
                width: 172px;
                height: 52px;
            }

            .m .sie-from-the-blog_0 {
                left: 76px;
                top: 1774px;
                width: 168px;
                height: 50px;
            }

            .d .sie-from-the-blog_0 .se-simple {
                border-color: rgba(255, 255, 255, 1);
                border-width: 1px;
                background-color: rgba(204, 174, 171, 0);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-from-the-blog_0 .se-simple {
                border-color: rgba(255, 255, 255, 1);
                border-width: 1px;
                background-color: rgba(204, 174, 171, 0);
                border-style: solid;
                border-radius: inherit;
            }

            .d .sie-from-the-blog_1 {
                left: 324px;
                top: 135px;
                width: 554px;
                height: 76px;
            }

            .m .sie-from-the-blog_1 {
                left: 32px;
                top: 87px;
                width: 257px;
                height: 37px;
            }

            .d .sie-from-the-blog_1-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.1;
                letter-spacing: 0.1em;
                font-size: 60px;
                text-align: center;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-from-the-blog_1-text {
                color: rgba(255, 255, 255, 1);
                letter-spacing: 0.1em;
                font-size: 42px;
                text-align: center;
            }

            .d .sie-from-the-blog_2 {
                left: 444px;
                top: 73px;
                width: 313px;
                height: 61px;
            }

            .m .sie-from-the-blog_2 {
                left: 52px;
                top: 23px;
                width: 217px;
                height: 40px;
            }

            .d .sie-from-the-blog_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-from-the-blog_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-from-the-blog_2-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-from-the-blog_2-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-from-the-blog_2-text {
                color: rgba(255, 255, 255, 1);
                text-transform: none;
                letter-spacing: 0em;
                font-size: 50px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-from-the-blog_2-text {
                color: rgba(255, 255, 255, 1);
                text-transform: none;
                letter-spacing: 0em;
                font-size: 40px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-from-the-blog_3 {
                left: 529px;
                top: 975px;
                width: 143px;
                height: 15px;
            }

            .m .sie-from-the-blog_3 {
                left: 90px;
                top: 1791px;
                width: 140px;
                height: 20px;
            }

            .d .sie-from-the-blog_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-from-the-blog_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-from-the-blog_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-from-the-blog_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-from-the-blog_3-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 10px;
                text-align: center;
                font-family: 'Commuters Semi';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-from-the-blog_3-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 10px;
                text-align: center;
                font-family: 'Commuters Semi';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-from-the-blog_4 {
                left: 250px;
                top: 211px;
                width: 701px;
                height: 89px;
            }

            .m .sie-from-the-blog_4 {
                left: 20px;
                top: 149px;
                width: 281px;
                height: 151px;
            }

            .d .sie-from-the-blog_4-text {
                color: rgba(255, 255, 255, 1);
                font-size: 14px;
                text-align: center;
            }

            .m .sie-from-the-blog_4-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.7;
                text-align: center;
            }

            .m .sib-from-the-blog .sis-from-the-blog_view-1 {
                background-color: transparent;
            }

            .d .sib-from-the-blog .sis-from-the-blog_view-1 {
                background-color: transparent;
            }

            .d .sie-from-the-blog_view-1_0 {
                left: 65px;
                top: 351px;
                width: 322px;
                height: 349px;
            }

            .m .sie-from-the-blog_view-1_0 {
                left: 30px;
                top: 335px;
                width: 261px;
                height: 261px;
            }

            .d .sie-from-the-blog_view-1_0 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-from-the-blog_view-1_0 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 80% 80%;
            }

            .d .sie-from-the-blog_view-1_1 {
                left: 65px;
                top: 700px;
                width: 322px;
                height: 194px;
            }

            .m .sie-from-the-blog_view-1_1 {
                left: 30px;
                top: 596px;
                width: 261px;
                height: 180px;
            }

            .d .sie-from-the-blog_view-1_1 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .m .sie-from-the-blog_view-1_1 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-from-the-blog_view-1_2 {
                left: 98px;
                top: 728px;
                width: 258px;
                height: 102px;
            }

            .m .sie-from-the-blog_view-1_2 {
                left: 52px;
                top: 627px;
                width: 226px;
                height: 81px;
            }

            .d .sie-from-the-blog_view-1_2-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.18;
                font-size: 28px;
                font-family: 'Made Mirage Thin';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-from-the-blog_view-1_2-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.18;
                font-size: 25px;
            }

            .d .sie-from-the-blog_view-1_3 {
                left: 98px;
                top: 844px;
                width: 161px;
                height: 17px;
            }

            .m .sie-from-the-blog_view-1_3 {
                left: 52px;
                top: 733px;
                width: 180px;
                height: 15px;
            }

            .d .sie-from-the-blog_view-1_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-from-the-blog_view-1_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-from-the-blog_view-1_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-from-the-blog_view-1_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-from-the-blog_view-1_3-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Commuters Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sib-from-the-blog .sis-from-the-blog_view-2 {
                background-color: transparent;
            }

            .d .sib-from-the-blog .sis-from-the-blog_view-2 {
                background-color: transparent;
            }

            .d .sie-from-the-blog_view-2_0 {
                left: 440px;
                top: 700px;
                width: 322px;
                height: 194px;
            }

            .m .sie-from-the-blog_view-2_0 {
                left: 30px;
                top: 1072px;
                width: 261px;
                height: 181px;
            }

            .d .sie-from-the-blog_view-2_0 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .m .sie-from-the-blog_view-2_0 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-from-the-blog_view-2_1 {
                left: 440px;
                top: 351px;
                width: 322px;
                height: 349px;
            }

            .m .sie-from-the-blog_view-2_1 {
                left: 30px;
                top: 814px;
                width: 261px;
                height: 261px;
            }

            .d .sie-from-the-blog_view-2_1 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-from-the-blog_view-2_1 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 80% 80%;
            }

            .d .sie-from-the-blog_view-2_2 {
                left: 478px;
                top: 728px;
                width: 230px;
                height: 103px;
            }

            .m .sie-from-the-blog_view-2_2 {
                left: 52px;
                top: 1103px;
                width: 177px;
                height: 81px;
            }

            .d .sie-from-the-blog_view-2_2-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.18;
                font-size: 28px;
                font-family: 'Made Mirage Thin';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-from-the-blog_view-2_2-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.18;
                font-size: 25px;
            }

            .d .sie-from-the-blog_view-2_3 {
                left: 478px;
                top: 844px;
                width: 243px;
                height: 23px;
            }

            .m .sie-from-the-blog_view-2_3 {
                left: 52px;
                top: 1209px;
                width: 146px;
                height: 17px;
            }

            .d .sie-from-the-blog_view-2_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-from-the-blog_view-2_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-from-the-blog_view-2_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-from-the-blog_view-2_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-from-the-blog_view-2_3-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Commuters Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sib-from-the-blog .sis-from-the-blog_view-3 {
                background-color: transparent;
            }

            .d .sib-from-the-blog .sis-from-the-blog_view-3 {
                background-color: transparent;
            }

            .d .sie-from-the-blog_view-3_0 {
                left: 814px;
                top: 700px;
                width: 322px;
                height: 194px;
            }

            .m .sie-from-the-blog_view-3_0 {
                left: 30px;
                top: 1549px;
                width: 261px;
                height: 181px;
            }

            .d .sie-from-the-blog_view-3_0 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .m .sie-from-the-blog_view-3_0 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-from-the-blog_view-3_1 {
                left: 814px;
                top: 351px;
                width: 322px;
                height: 349px;
            }

            .m .sie-from-the-blog_view-3_1 {
                left: 30px;
                top: 1292px;
                width: 261px;
                height: 261px;
            }

            .d .sie-from-the-blog_view-3_1 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-from-the-blog_view-3_1 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 80% 80%;
            }

            .d .sie-from-the-blog_view-3_2 {
                left: 848px;
                top: 728px;
                width: 257px;
                height: 104px;
            }

            .m .sie-from-the-blog_view-3_2 {
                left: 52px;
                top: 1582px;
                width: 225px;
                height: 81px;
            }

            .d .sie-from-the-blog_view-3_2-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.18;
                font-size: 28px;
                font-family: 'Made Mirage Thin';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-from-the-blog_view-3_2-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.18;
                font-size: 25px;
            }

            .d .sie-from-the-blog_view-3_3 {
                left: 848px;
                top: 844px;
                width: 243px;
                height: 23px;
            }

            .m .sie-from-the-blog_view-3_3 {
                left: 52px;
                top: 1689px;
                width: 146px;
                height: 37px;
            }

            .d .sie-from-the-blog_view-3_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-from-the-blog_view-3_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-from-the-blog_view-3_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-from-the-blog_view-3_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-from-the-blog_view-3_3-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Commuters Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-from-the-blog_view-3_3-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Commuters Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sib-start-here {
                height: 706px;
            }

            .d .sib-start-here {
                height: 454px;
            }

            .m .sib-start-here .ss-bg {
                background-color: rgba(204, 174, 171, 1);
            }

            .d .sib-start-here .ss-bg {
                background-color: rgba(204, 174, 171, 1);
            }

            .d .sie-start-here_0 {
                left: 118px;
                top: 154px;
                width: 391px;
                height: 243px;
            }

            .m .sie-start-here_0 {
                left: 30px;
                top: 75px;
                width: 263px;
                height: 144px;
            }

            .d .sie-start-here_0-text {
                color: rgba(255, 255, 255, 1);
                font-size: 45px;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-start-here_0-text {
                color: rgba(255, 255, 255, 1);
                font-size: 30px;
            }

            .d .sie-start-here_1 {
                left: 607px;
                top: 125px;
                width: 483px;
                height: 261px;
            }

            .m .sie-start-here_1 {
                left: 32px;
                top: 249px;
                width: 260px;
                height: 373px;
            }

            .d .sie-start-here_1-text {
                color: rgba(255, 255, 255, 1);
                font-size: 14px;
                text-align: left;
                overflow: hidden;
            }

            .m .sie-start-here_1-text {
                color: rgba(255, 255, 255, 1);
                font-size: 13px;
                overflow: hidden;
            }

            .d .sie-start-here_2 {
                left: 118px;
                top: 104px;
                width: 407px;
                height: 17px;
            }

            .m .sie-start-here_2 {
                left: 32px;
                top: 34px;
                width: 257px;
                height: 23px;
            }

            .d .sie-start-here_2-text {
                color: rgba(255, 255, 255, 1);
            }

            .m .sie-start-here_2-text {
                color: rgba(255, 255, 255, 1);
            }

            .m .sib-episodes {
                height: 1087px;
            }

            .d .sib-episodes {
                height: 1138px;
            }

            .m .sib-episodes .ss-bg {
                background-color: rgba(248, 248, 248, 1);
            }

            .d .sib-episodes .ss-bg {
                background-color: rgba(204, 174, 171, 1);
            }

            .d .sie-episodes_0 {
                left: 0px;
                top: 56px;
                width: 998px;
                height: 943px;
            }

            .m .sie-episodes_0 {
                left: 30px;
                top: 596px;
                width: 261px;
                height: 180px;
                display: none;
            }

            .d .sie-episodes_0 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .m .sie-episodes_0 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-episodes_1 {
                left: 695px;
                top: 257px;
                width: 497px;
                height: 561px;
            }

            .m .sie-episodes_1 {
                left: -42px;
                top: -75px;
                width: 333px;
                height: 453px;
            }

            .d .sie-episodes_1 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-episodes_1 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-episodes_2 {
                left: 667px;
                top: 443px;
                width: 55px;
                height: 28px;
            }

            .m .sie-episodes_2 {
                left: 258px;
                top: 621px;
                width: 26px;
                height: 26px;
            }

            .d .sie-episodes_2 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-episodes_2 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .d .sie-episodes_3 {
                left: 122px;
                top: 857px;
                width: 218px;
                height: 50px;
            }

            .m .sie-episodes_3 {
                left: 53px;
                top: 991px;
                width: 214px;
                height: 50px;
            }

            .d .sie-episodes_3 .se-simple {
                background-color: rgba(229, 219, 216, 1);
            }

            .m .sie-episodes_3 .se-simple {
                background-color: rgba(229, 219, 216, 1);
            }

            .d .sie-episodes_4 {
                left: 134px;
                top: 874px;
                width: 194px;
                height: 15px;
            }

            .m .sie-episodes_4 {
                left: 66px;
                top: 1008px;
                width: 188px;
                height: 20px;
            }

            .d .sie-episodes_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-episodes_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-episodes_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-episodes_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-episodes_4-text {
                font-size: 10px;
                text-align: center;
                font-family: 'Commuters Semi';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-episodes_4-text {
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-episodes_5 {
                left: 550px;
                top: 449px;
                width: 122px;
                height: 17px;
            }

            .m .sie-episodes_5 {
                left: 30px;
                top: 1551px;
                width: 132px;
                height: 23px;
                display: none;
            }

            .d .sie-episodes_5-text {
                color: rgba(69, 68, 62, 1);
            }

            .m .sie-episodes_5-text {
                color: rgba(67, 65, 59, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.25em;
                font-size: 13px;
                text-align: center;
            }

            .d .sie-episodes_6 {
                left: 121px;
                top: 443px;
                width: 39px;
                height: 29px;
            }

            .m .sie-episodes_6 {
                left: 27px;
                top: 621px;
                width: 65px;
                height: 21px;
            }

            .d .sie-episodes_6-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 16px;
                text-align: center;
                font-family: 'Montserrat';
                font-weight: 400;
                font-style: normal;
                overflow: hidden;
            }

            .m .sie-episodes_6-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: left;
                font-family: 'Montserrat';
                font-weight: 400;
                font-style: normal;
                overflow: hidden;
            }

            .d .sie-episodes_7 {
                left: 667px;
                top: 546px;
                width: 55px;
                height: 28px;
            }

            .m .sie-episodes_7 {
                left: 257px;
                top: 728px;
                width: 26px;
                height: 26px;
            }

            .d .sie-episodes_7 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-episodes_7 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .d .sie-episodes_8 {
                left: 550px;
                top: 551px;
                width: 122px;
                height: 17px;
            }

            .m .sie-episodes_8 {
                left: 30px;
                top: 1551px;
                width: 132px;
                height: 23px;
                display: none;
            }

            .d .sie-episodes_8-text {
                color: rgba(69, 68, 62, 1);
            }

            .m .sie-episodes_8-text {
                color: rgba(67, 65, 59, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.25em;
                font-size: 13px;
                text-align: center;
            }

            .d .sie-episodes_9 {
                left: 121px;
                top: 546px;
                width: 39px;
                height: 30px;
            }

            .m .sie-episodes_9 {
                left: 26px;
                top: 729px;
                width: 46px;
                height: 19px;
            }

            .d .sie-episodes_9-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 16px;
                text-align: center;
                font-family: 'Montserrat';
                font-weight: 400;
                font-style: normal;
                overflow: hidden;
            }

            .m .sie-episodes_9-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: left;
                font-family: 'Montserrat';
                font-weight: 400;
                font-style: normal;
                overflow: hidden;
            }

            .d .sie-episodes_10 {
                left: 667px;
                top: 648px;
                width: 55px;
                height: 28px;
            }

            .m .sie-episodes_10 {
                left: 257px;
                top: 824px;
                width: 26px;
                height: 26px;
            }

            .d .sie-episodes_10 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-episodes_10 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .d .sie-episodes_11 {
                left: 550px;
                top: 653px;
                width: 122px;
                height: 17px;
            }

            .m .sie-episodes_11 {
                left: 30px;
                top: 1551px;
                width: 132px;
                height: 23px;
                display: none;
            }

            .d .sie-episodes_11-text {
                color: rgba(69, 68, 62, 1);
            }

            .m .sie-episodes_11-text {
                color: rgba(67, 65, 59, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.25em;
                font-size: 13px;
                text-align: center;
            }

            .d .sie-episodes_12 {
                left: 121px;
                top: 649px;
                width: 39px;
                height: 29px;
            }

            .m .sie-episodes_12 {
                left: 26px;
                top: 824px;
                width: 40px;
                height: 28px;
            }

            .d .sie-episodes_12-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 16px;
                text-align: center;
                font-family: 'Montserrat';
                font-weight: 400;
                font-style: normal;
                overflow: hidden;
            }

            .m .sie-episodes_12-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: left;
                font-family: 'Montserrat';
                font-weight: 400;
                font-style: normal;
                overflow: hidden;
            }

            .d .sie-episodes_13 {
                left: 122px;
                top: 404px;
                width: 590px;
                height: 1px;
            }

            .m .sie-episodes_13 {
                left: 28px;
                top: 589px;
                width: 260px;
                height: 1px;
            }

            .d .sie-episodes_13 .se-simple {
                background-color: rgba(204, 174, 171, 0.5);
            }

            .m .sie-episodes_13 .se-simple {
                background-color: rgba(210, 190, 183, 1);
            }

            .d .sie-episodes_14 {
                left: 122px;
                top: 507px;
                width: 590px;
                height: 1px;
            }

            .m .sie-episodes_14 {
                left: 28px;
                top: 692px;
                width: 260px;
                height: 1px;
            }

            .d .sie-episodes_14 .se-simple {
                background-color: rgba(204, 174, 171, 0.5);
            }

            .m .sie-episodes_14 .se-simple {
                background-color: rgba(210, 190, 183, 1);
            }

            .d .sie-episodes_15 {
                left: 122px;
                top: 610px;
                width: 590px;
                height: 1px;
            }

            .m .sie-episodes_15 {
                left: 27px;
                top: 787px;
                width: 260px;
                height: 1px;
            }

            .d .sie-episodes_15 .se-simple {
                background-color: rgba(204, 174, 171, 0.5);
            }

            .m .sie-episodes_15 .se-simple {
                background-color: rgba(210, 190, 183, 1);
            }

            .d .sie-episodes_16 {
                left: 122px;
                top: 713px;
                width: 590px;
                height: 1px;
            }

            .m .sie-episodes_16 {
                left: 27px;
                top: 882px;
                width: 260px;
                height: 1px;
            }

            .d .sie-episodes_16 .se-simple {
                background-color: rgba(204, 174, 171, 0.5);
            }

            .m .sie-episodes_16 .se-simple {
                background-color: rgba(210, 190, 183, 1);
            }

            .d .sie-episodes_17 {
                left: 667px;
                top: 751px;
                width: 55px;
                height: 28px;
            }

            .m .sie-episodes_17 {
                left: 257px;
                top: 920px;
                width: 26px;
                height: 26px;
            }

            .d .sie-episodes_17 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-episodes_17 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .d .sie-episodes_18 {
                left: 550px;
                top: 757px;
                width: 122px;
                height: 17px;
            }

            .m .sie-episodes_18 {
                left: 30px;
                top: 1551px;
                width: 132px;
                height: 23px;
                display: none;
            }

            .d .sie-episodes_18-text {
                color: rgba(69, 68, 62, 1);
            }

            .m .sie-episodes_18-text {
                color: rgba(67, 65, 59, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.25em;
                font-size: 13px;
                text-align: center;
            }

            .d .sie-episodes_19 {
                left: 121px;
                top: 757px;
                width: 39px;
                height: 29px;
            }

            .m .sie-episodes_19 {
                left: 26px;
                top: 919px;
                width: 38px;
                height: 26px;
            }

            .d .sie-episodes_19-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 16px;
                text-align: center;
                font-family: 'Montserrat';
                font-weight: 400;
                font-style: normal;
                overflow: hidden;
            }

            .m .sie-episodes_19-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: left;
                font-family: 'Montserrat';
                font-weight: 400;
                font-style: normal;
                overflow: hidden;
            }

            .d .sie-episodes_20 {
                left: 174px;
                top: 427px;
                width: 298px;
                height: 62px;
            }

            .m .sie-episodes_20 {
                left: 72px;
                top: 613px;
                width: 175px;
                height: 58px;
            }

            .d .sie-episodes_20-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 26px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-episodes_20-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 18px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-episodes_21 {
                left: 174px;
                top: 529px;
                width: 332px;
                height: 62px;
            }

            .m .sie-episodes_21 {
                left: 71px;
                top: 710px;
                width: 167px;
                height: 61px;
            }

            .d .sie-episodes_21-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 26px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-episodes_21-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 18px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-episodes_22 {
                left: 174px;
                top: 632px;
                width: 290px;
                height: 62px;
            }

            .m .sie-episodes_22 {
                left: 71px;
                top: 804px;
                width: 139px;
                height: 65px;
            }

            .d .sie-episodes_22-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 26px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-episodes_22-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 18px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-episodes_23 {
                left: 174px;
                top: 743px;
                width: 332px;
                height: 62px;
            }

            .m .sie-episodes_23 {
                left: 71px;
                top: 899px;
                width: 165px;
                height: 66px;
            }

            .d .sie-episodes_23-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 26px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-episodes_23-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 18px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-episodes_24 {
                left: 122px;
                top: 241px;
                width: 115px;
                height: 119px;
            }

            .m .sie-episodes_24 {
                left: 28px;
                top: 441px;
                width: 112px;
                height: 121px;
            }

            .d .sie-episodes_24 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-episodes_24 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-episodes_25 {
                left: 655px;
                top: 278px;
                width: 59px;
                height: 61px;
            }

            .m .sie-episodes_25 {
                left: 64px;
                top: 477px;
                width: 42px;
                height: 42px;
            }

            .d .sie-episodes_25 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .m .sie-episodes_25 svg {
                fill: rgba(255, 255, 255, 1);
            }

            .d .sie-episodes_26 {
                left: 268px;
                top: 285px;
                width: 326px;
                height: 69px;
            }

            .m .sie-episodes_26 {
                left: 162px;
                top: 449px;
                width: 141px;
                height: 114px;
            }

            .d .sie-episodes_26-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 26px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-episodes_26-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.2;
                font-size: 20px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-episodes_27 {
                left: 268px;
                top: 256px;
                width: 210px;
                height: 17px;
            }

            .m .sie-episodes_27 {
                left: 28px;
                top: 407px;
                width: 211px;
                height: 23px;
            }

            .d .sie-episodes_27-text {
                color: rgba(69, 68, 62, 1);
            }

            .m .sie-episodes_27-text {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-episodes_28 {
                left: 91px;
                top: 113px;
                width: 482px;
                height: 91px;
            }

            .m .sie-episodes_28 {
                left: -13px;
                top: 323px;
                width: 309px;
                height: 55px;
            }

            .d .sie-episodes_28-text {
                color: rgba(204, 174, 171, 1);
                line-height: 0.9;
                letter-spacing: 0em;
                font-size: 85px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-episodes_28-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1;
                letter-spacing: 0em;
                font-size: 50px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-episodes_29 {
                left: 867px;
                top: 333px;
                width: 171px;
                height: 308px;
            }

            .m .sie-episodes_29 {
                left: 57px;
                top: -5px;
                width: 138px;
                height: 223px;
            }

            .d .sie-episodes_29 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-episodes_29 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-episodes_30 {
                left: 862px;
                top: 323px;
                width: 177px;
                height: 174px;
            }

            .m .sie-episodes_30 {
                left: 54px;
                top: 16px;
                width: 124px;
                height: 125px;
            }

            .d .sie-episodes_30 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 0% 0%;
            }

            .m .sie-episodes_30 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 0% 0%;
            }

            .m .sib-insider-opt-in {
                height: 207px;
            }

            .d .sib-insider-opt-in {
                height: 573px;
            }

            .m .sib-insider-opt-in .ss-bg {
                background-color: rgba(67, 65, 59, 1);
            }

            .d .sib-insider-opt-in .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .m .sib-new-canvas {
                height: 546px;
            }

            .d .sib-new-canvas {
                height: 448px;
            }

            .m .sib-new-canvas .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sib-new-canvas .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-new-canvas_0 {
                left: 198px;
                top: -81px;
                width: 805px;
                height: 516px;
            }

            .m .sie-new-canvas_0 {
                left: 23px;
                top: -42px;
                width: 274px;
                height: 562px;
            }

            .d .sie-new-canvas_0 .se-simple {
                background-color: rgba(247, 245, 244, 1);
            }

            .m .sie-new-canvas_0 .se-simple {
                background-color: rgba(247, 245, 244, 1);
            }

            .d .sie-new-canvas_1 {
                left: 296px;
                top: 136px;
                width: 619px;
                height: 150px;
            }

            .m .sie-new-canvas_1 {
                left: 44px;
                top: 148px;
                width: 240px;
                height: 267px;
            }

            .d .sie-new-canvas_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: left;
                font-family: 'Montserrat';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-new-canvas_2 {
                left: 295px;
                top: -6px;
                width: 504px;
                height: 39px;
            }

            .m .sie-new-canvas_2 {
                left: 44px;
                top: -11px;
                width: 265px;
                height: 35px;
            }

            .d .sie-new-canvas_2-text {
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-new-canvas_2-text {
                font-size: 35px;
            }

            .d .sie-new-canvas_3 {
                left: 296px;
                top: 68px;
                width: 603px;
                height: 53px;
            }

            .m .sie-new-canvas_3 {
                left: 44px;
                top: 38px;
                width: 227px;
                height: 100px;
            }

            .d .sie-new-canvas_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-new-canvas_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-new-canvas_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-new-canvas_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-new-canvas_3-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                line-height: 1.3;
                letter-spacing: 0.05em;
                font-size: 19px;
                text-align: left;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-new-canvas_3-text {
                text-transform: none;
                line-height: 1.3;
                letter-spacing: 0.05em;
                font-size: 15px;
                text-align: left;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-new-canvas_3-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-new-canvas_4 {
                left: 295px;
                top: 298px;
                width: 265px;
                height: 52px;
            }

            .m .sie-new-canvas_4 {
                left: 46px;
                top: 440px;
                width: 229px;
                height: 50px;
            }

            .d .sie-new-canvas_4 .se-simple {
                background-color: rgba(204, 174, 171, 1);
            }

            .m .sie-new-canvas_4 .se-simple {
                background-color: rgba(204, 174, 171, 1);
            }

            .d .sie-new-canvas_5 {
                left: 313px;
                top: 315px;
                width: 229px;
                height: 15px;
            }

            .m .sie-new-canvas_5 {
                left: 60px;
                top: 457px;
                width: 202px;
                height: 20px;
            }

            .d .sie-new-canvas_5:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-new-canvas_5:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-new-canvas_5-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-new-canvas_5-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-new-canvas_5-text {
                color: rgba(255, 255, 255, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Commuters Semi';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-new-canvas_5-text {
                color: rgba(255, 255, 255, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .sib-courses {
                z-index: 1;
            }

            .m .sib-courses {
                height: 1270px;
            }

            .d .sib-courses {
                height: 1200px;
            }

            .m .sib-courses .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sib-courses .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-courses_0 {
                left: 128px;
                top: 154px;
                width: 516px;
                height: 450px;
            }

            .m .sie-courses_0 {
                left: 71px;
                top: 83px;
                width: 210px;
                height: 265px;
            }

            .d .sie-courses_0 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-courses_0 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 30% 30%;
            }

            .d .sie-courses_1 {
                left: 738px;
                top: 490px;
                width: 176px;
                height: 52px;
            }

            .m .sie-courses_1 {
                left: 29px;
                top: 603px;
                width: 168px;
                height: 50px;
            }

            .d .sie-courses_1 .se-simple {
                border-color: rgba(204, 174, 171, 1);
                border-width: 1px;
                background-color: rgba(204, 174, 171, 0);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-courses_1 .se-simple {
                border-color: rgba(204, 174, 171, 1);
                border-width: 1px;
                border-style: solid;
                border-radius: inherit;
            }

            .d .sie-courses_2 {
                left: 738px;
                top: 172px;
                width: 266px;
                height: 23px;
            }

            .m .sie-courses_2 {
                left: 30px;
                top: 172px;
                width: 249px;
                height: 22px;
            }

            .d .sie-courses_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-courses_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-courses_2-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-courses_2-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-courses_2-text {
                color: rgba(69, 68, 62, 1);
                font-size: 12px;
                text-align: left;
                font-family: 'Commuters Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-courses_2-text {
                font-size: 10px;
            }

            .d .sie-courses_2-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-courses_3 {
                left: 738px;
                top: 264px;
                width: 399px;
                height: 99px;
            }

            .m .sie-courses_3 {
                left: 30px;
                top: 409px;
                width: 257px;
                height: 80px;
            }

            .d .sie-courses_3-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1;
                font-size: 50px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-courses_3-text {
                color: rgba(69, 68, 62, 1);
                font-size: 38px;
            }

            .d .sie-courses_4 {
                left: 738px;
                top: 381px;
                width: 364px;
                height: 471px;
            }

            .m .sie-courses_4 {
                left: 30px;
                top: 497px;
                width: 260px;
                height: 471px;
            }

            .d .sie-courses_4-text {
                color: rgba(69, 68, 62, 1);
                font-size: 14px;
                overflow: hidden;
            }

            .m .sie-courses_4-text {
                font-size: 13px;
                overflow: hidden;
            }

            .d .sie-courses_5 {
                left: 750px;
                top: 507px;
                width: 153px;
                height: 15px;
            }

            .m .sie-courses_5 {
                left: 43px;
                top: 620px;
                width: 140px;
                height: 20px;
            }

            .d .sie-courses_5:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-courses_5:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-courses_5-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-courses_5-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-courses_5-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Commuters Semi';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-courses_5-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-courses_6 {
                left: 0px;
                top: 0px;
                width: 367px;
                height: 151px;
            }

            .m .sie-courses_6 {
                left: 31px;
                top: 15px;
                width: 142px;
                height: 81px;
            }

            .d .sie-courses_6-text {
                color: rgba(69, 68, 62, 1);
                line-height: 0.7;
                font-size: 60px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-courses_6-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                line-height: 0.8;
                font-size: 45px;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-courses_7 {
                left: 584px;
                top: 688px;
                width: 619px;
                height: 450px;
            }

            .m .sie-courses_7 {
                left: 84px;
                top: 690px;
                width: 238px;
                height: 184px;
            }

            .d .sie-courses_7 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 60% 60%;
            }

            .m .sie-courses_7 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 80% 80%;
            }

            .d .sie-courses_8 {
                left: 125px;
                top: 1019px;
                width: 176px;
                height: 52px;
            }

            .m .sie-courses_8 {
                left: 29px;
                top: 1149px;
                width: 168px;
                height: 50px;
            }

            .d .sie-courses_8 .se-simple {
                border-color: rgba(204, 174, 171, 1);
                border-width: 1px;
                background-color: rgba(204, 174, 171, 0);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-courses_8 .se-simple {
                border-color: rgba(204, 174, 171, 1);
                border-width: 1px;
                border-style: solid;
                border-radius: inherit;
            }

            .d .sie-courses_9 {
                left: 125px;
                top: 734px;
                width: 266px;
                height: 23px;
            }

            .m .sie-courses_9 {
                left: 30px;
                top: 899px;
                width: 249px;
                height: 22px;
            }

            .d .sie-courses_9:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-courses_9:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-courses_9-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-courses_9-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-courses_9-text {
                color: rgba(69, 68, 62, 1);
                font-size: 12px;
                text-align: left;
                font-family: 'Commuters Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-courses_9-text {
                font-size: 10px;
            }

            .d .sie-courses_9-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-courses_10 {
                left: 125px;
                top: 775px;
                width: 338px;
                height: 100px;
            }

            .m .sie-courses_10 {
                left: 30px;
                top: 932px;
                width: 205px;
                height: 76px;
            }

            .d .sie-courses_10-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1;
                font-size: 50px;
                text-align: left;
                font-family: 'Made Mirage Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-courses_10-text {
                color: rgba(69, 68, 62, 1);
                font-size: 38px;
            }

            .d .sie-courses_11 {
                left: 125px;
                top: 890px;
                width: 341px;
                height: 111px;
            }

            .m .sie-courses_11 {
                left: 30px;
                top: 1018px;
                width: 260px;
                height: 117px;
            }

            .d .sie-courses_11-text {
                color: rgba(69, 68, 62, 1);
                font-size: 14px;
                overflow: hidden;
            }

            .m .sie-courses_11-text {
                font-size: 13px;
                overflow: hidden;
            }

            .d .sie-courses_12 {
                left: 137px;
                top: 1036px;
                width: 153px;
                height: 15px;
            }

            .m .sie-courses_12 {
                left: 44px;
                top: 1166px;
                width: 140px;
                height: 20px;
            }

            .d .sie-courses_12:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-courses_12:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-courses_12-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-courses_12-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-courses_12-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Commuters Semi';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-courses_12-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .sib-mastermind {
                z-index: 1;
            }

            .m .sib-mastermind {
                height: 797px;
            }

            .d .sib-mastermind {
                height: 843px;
            }

            .m .sib-mastermind .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sib-mastermind .ss-bg {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-mastermind_0 {
                left: 233px;
                top: 124px;
                width: 434px;
                height: 595px;
            }

            .m .sie-mastermind_0 {
                left: 32px;
                top: 702px;
                width: 168px;
                height: 50px;
            }

            .d .sie-mastermind_0 .se-simple {
                background-color: rgba(247, 245, 244, 1);
            }

            .m .sie-mastermind_0 .se-simple {
                background-color: rgba(204, 174, 171, 1);
            }

            .d .sie-mastermind_1 {
                left: 584px;
                top: 525px;
                width: 168px;
                height: 52px;
            }

            .m .sie-mastermind_1 {
                left: 87px;
                top: -5px;
                width: 235px;
                height: 381px;
            }

            .d .sie-mastermind_1 .se-simple {
                background-color: rgba(204, 174, 171, 1);
            }

            .m .sie-mastermind_1 .se-simple {
                background-color: rgba(247, 245, 244, 1);
            }

            .d .sie-mastermind_2 {
                left: 147px;
                top: 155px;
                width: 411px;
                height: 525px;
            }

            .m .sie-mastermind_2 {
                left: 24px;
                top: 25px;
                width: 242px;
                height: 317px;
            }

            .d .sie-mastermind_2 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-mastermind_2 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-mastermind_3 {
                left: 584px;
                top: 246px;
                width: 309px;
                height: 23px;
            }

            .m .sie-mastermind_3 {
                left: 32px;
                top: 407px;
                width: 240px;
                height: 22px;
            }

            .d .sie-mastermind_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mastermind_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mastermind_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mastermind_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-mastermind_3-text {
                color: rgba(69, 68, 62, 1);
                font-size: 12px;
                text-align: left;
                font-family: 'Commuters Regular';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-mastermind_3-text {
                font-size: 10px;
            }

            .d .sie-mastermind_3-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-mastermind_4 {
                left: 584px;
                top: 291px;
                width: 443px;
                height: 107px;
            }

            .m .sie-mastermind_4 {
                left: 32px;
                top: 455px;
                width: 268px;
                height: 101px;
            }

            .d .sie-mastermind_4-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1;
                font-size: 50px;
                text-align: left;
            }

            .m .sie-mastermind_4-text {
                color: rgba(69, 68, 62, 1);
                font-size: 35px;
            }

            .d .sie-mastermind_5 {
                left: 584px;
                top: 413px;
                width: 405px;
                height: 87px;
            }

            .m .sie-mastermind_5 {
                left: 32px;
                top: 574px;
                width: 237px;
                height: 112px;
            }

            .d .sie-mastermind_5-text {
                overflow: hidden;
            }

            .m .sie-mastermind_5-text {
                overflow: hidden;
            }

            .d .sie-mastermind_6 {
                left: 597px;
                top: 542px;
                width: 143px;
                height: 15px;
            }

            .m .sie-mastermind_6 {
                left: 43px;
                top: 719px;
                width: 140px;
                height: 20px;
            }

            .d .sie-mastermind_6:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-mastermind_6:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-mastermind_6-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-mastermind_6-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-mastermind_6-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-mastermind_6-text {
                color: rgba(255, 255, 255, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-mastermind_7 {
                left: 0px;
                top: 0px;
                width: 276px;
                height: 91px;
            }

            .m .sie-mastermind_7 {
                left: -46px;
                top: -8px;
                width: 309px;
                height: 55px;
            }

            .d .sie-mastermind_7-text {
                color: rgba(69, 68, 62, 1);
                line-height: 0.7;
                letter-spacing: 0em;
                font-size: 60px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-mastermind_7-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1;
                letter-spacing: 0em;
                font-size: 50px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .m .sib-reviews {
                height: 687px;
            }

            .d .sib-reviews {
                height: 587px;
            }

            .m .sib-reviews .ss-bg {
                background-color: rgba(247, 245, 244, 1);
            }

            .d .sib-reviews .ss-bg {
                background-color: rgba(247, 245, 244, 1);
            }

            .m .sib-reviews .sis-reviews_review-1 {
                background-color: transparent;
            }

            .d .sib-reviews .sis-reviews_review-1 {
                background-color: transparent;
            }

            .d .sie-reviews_review-1_0 {
                left: 312px;
                top: 307px;
                width: 576px;
                height: 108px;
            }

            .m .sie-reviews_review-1_0 {
                left: 29px;
                top: 319px;
                width: 263px;
                height: 180px;
            }

            .d .sie-reviews_review-1_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-reviews_review-1_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-reviews_review-1_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-reviews_review-1_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-reviews_review-1_0-text {
                font-size: 14px;
                text-align: center;
            }

            .m .sie-reviews_review-1_0-text {
                text-align: center;
            }

            .d .sie-reviews_review-1_0-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-reviews_review-1_1 {
                left: 253px;
                top: 136px;
                width: 694px;
                height: 160px;
            }

            .m .sie-reviews_review-1_1 {
                left: 41px;
                top: 98px;
                width: 238px;
                height: 202px;
            }

            .d .sie-reviews_review-1_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 40px;
                text-align: center;
            }

            .m .sie-reviews_review-1_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 27px;
                text-align: center;
            }

            .d .sie-reviews_review-1_2 {
                left: 509px;
                top: 446px;
                width: 182px;
                height: 46px;
            }

            .m .sie-reviews_review-1_2 {
                left: 64px;
                top: 526px;
                width: 192px;
                height: 57px;
            }

            .d .sie-reviews_review-1_2-text {
                font-size: 20px;
                text-align: center;
            }

            .m .sie-reviews_review-1_2-text {
                font-size: 15px;
                text-align: center;
            }

            .d .sie-reviews_review-1_3 {
                left: 409px;
                top: 797px;
                width: 382px;
                height: 27px;
            }

            .m .sie-reviews_review-1_3 {
                left: 63px;
                top: 744px;
                width: 195px;
                height: 22px;
            }

            .d .sie-reviews_review-1_3-text {
                color: rgba(67, 65, 59, 1);
                text-transform: none;
                line-height: 1.5;
                letter-spacing: 0.1em;
                font-size: 16px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-reviews_review-1_3-text {
                color: rgba(67, 65, 59, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-reviews_review-1_4 {
                left: 446px;
                top: 843px;
                width: 308px;
                height: 50px;
            }

            .m .sie-reviews_review-1_4 {
                left: 39px;
                top: 785px;
                width: 242px;
                height: 50px;
            }

            .d .sie-reviews_review-1_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                border-width: 0px;
                background-color: rgba(211, 181, 178, 1);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-reviews_review-1_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                background-color: rgba(211, 181, 178, 1);
            }

            .d .sie-reviews_review-1_5 {
                left: 472px;
                top: 858px;
                width: 257px;
                height: 18px;
            }

            .m .sie-reviews_review-1_5 {
                left: 45px;
                top: 801px;
                width: 230px;
                height: 18px;
            }

            .d .sie-reviews_review-1_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.8;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .m .sie-reviews_review-1_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .d .sie-reviews_review-1_6 {
                left: 424px;
                top: 95px;
                width: 353px;
                height: 17px;
            }

            .m .sie-reviews_review-1_6 {
                left: 39px;
                top: 40px;
                width: 243px;
                height: 16px;
            }

            .d .sie-reviews_review-1_6-text {
                text-align: center;
            }

            .m .sie-reviews_review-1_6-text {
                font-size: 11px;
                text-align: center;
            }

            .m .sib-reviews .sis-reviews_review-2 {
                background-color: transparent;
            }

            .d .sib-reviews .sis-reviews_review-2 {
                background-color: transparent;
            }

            .d .sie-reviews_review-2_0 {
                left: 318px;
                top: 307px;
                width: 564px;
                height: 108px;
            }

            .m .sie-reviews_review-2_0 {
                left: 26px;
                top: 316px;
                width: 269px;
                height: 180px;
            }

            .d .sie-reviews_review-2_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-reviews_review-2_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-reviews_review-2_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-reviews_review-2_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-reviews_review-2_0-text {
                font-size: 14px;
                text-align: center;
            }

            .m .sie-reviews_review-2_0-text {
                text-align: center;
            }

            .d .sie-reviews_review-2_0-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-reviews_review-2_1 {
                left: 307px;
                top: 136px;
                width: 587px;
                height: 160px;
            }

            .m .sie-reviews_review-2_1 {
                left: 23px;
                top: 131px;
                width: 274px;
                height: 140px;
            }

            .d .sie-reviews_review-2_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 40px;
                text-align: center;
            }

            .m .sie-reviews_review-2_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 27px;
                text-align: center;
            }

            .d .sie-reviews_review-2_2 {
                left: 509px;
                top: 446px;
                width: 182px;
                height: 46px;
            }

            .m .sie-reviews_review-2_2 {
                left: 64px;
                top: 506px;
                width: 192px;
                height: 57px;
            }

            .d .sie-reviews_review-2_2-text {
                font-size: 20px;
                text-align: center;
            }

            .m .sie-reviews_review-2_2-text {
                font-size: 30px;
                text-align: center;
            }

            .d .sie-reviews_review-2_3 {
                left: 409px;
                top: 797px;
                width: 382px;
                height: 27px;
            }

            .m .sie-reviews_review-2_3 {
                left: 63px;
                top: 744px;
                width: 195px;
                height: 22px;
            }

            .d .sie-reviews_review-2_3-text {
                color: rgba(67, 65, 59, 1);
                text-transform: none;
                line-height: 1.5;
                letter-spacing: 0.1em;
                font-size: 16px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-reviews_review-2_3-text {
                color: rgba(67, 65, 59, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-reviews_review-2_4 {
                left: 446px;
                top: 843px;
                width: 308px;
                height: 50px;
            }

            .m .sie-reviews_review-2_4 {
                left: 39px;
                top: 785px;
                width: 242px;
                height: 50px;
            }

            .d .sie-reviews_review-2_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                border-width: 0px;
                background-color: rgba(211, 181, 178, 1);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-reviews_review-2_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                background-color: rgba(211, 181, 178, 1);
            }

            .d .sie-reviews_review-2_5 {
                left: 472px;
                top: 858px;
                width: 257px;
                height: 18px;
            }

            .m .sie-reviews_review-2_5 {
                left: 45px;
                top: 801px;
                width: 230px;
                height: 18px;
            }

            .d .sie-reviews_review-2_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.8;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .m .sie-reviews_review-2_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .d .sie-reviews_review-2_6 {
                left: 424px;
                top: 95px;
                width: 353px;
                height: 17px;
            }

            .m .sie-reviews_review-2_6 {
                left: 39px;
                top: 40px;
                width: 243px;
                height: 16px;
            }

            .d .sie-reviews_review-2_6-text {
                text-align: center;
            }

            .m .sie-reviews_review-2_6-text {
                text-align: center;
            }

            .m .sib-reviews .sis-reviews_review-3 {
                background-color: transparent;
            }

            .d .sib-reviews .sis-reviews_review-3 {
                background-color: transparent;
            }

            .d .sie-reviews_review-3_0 {
                left: 312px;
                top: 307px;
                width: 576px;
                height: 85px;
            }

            .m .sie-reviews_review-3_0 {
                left: 26px;
                top: 294px;
                width: 269px;
                height: 180px;
            }

            .d .sie-reviews_review-3_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-reviews_review-3_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-reviews_review-3_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-reviews_review-3_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-reviews_review-3_0-text {
                font-size: 14px;
                text-align: center;
            }

            .m .sie-reviews_review-3_0-text {
                text-align: center;
            }

            .d .sie-reviews_review-3_0-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-reviews_review-3_1 {
                left: 272px;
                top: 136px;
                width: 656px;
                height: 160px;
            }

            .m .sie-reviews_review-3_1 {
                left: 23px;
                top: 108px;
                width: 274px;
                height: 173px;
            }

            .d .sie-reviews_review-3_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 40px;
                text-align: center;
            }

            .m .sie-reviews_review-3_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 27px;
                text-align: center;
            }

            .d .sie-reviews_review-3_2 {
                left: 509px;
                top: 411px;
                width: 182px;
                height: 46px;
            }

            .m .sie-reviews_review-3_2 {
                left: 64px;
                top: 484px;
                width: 192px;
                height: 57px;
            }

            .d .sie-reviews_review-3_2-text {
                font-size: 20px;
                text-align: center;
            }

            .m .sie-reviews_review-3_2-text {
                font-size: 30px;
                text-align: center;
            }

            .d .sie-reviews_review-3_3 {
                left: 409px;
                top: 797px;
                width: 382px;
                height: 27px;
            }

            .m .sie-reviews_review-3_3 {
                left: 63px;
                top: 744px;
                width: 195px;
                height: 22px;
            }

            .d .sie-reviews_review-3_3-text {
                color: rgba(67, 65, 59, 1);
                text-transform: none;
                line-height: 1.5;
                letter-spacing: 0.1em;
                font-size: 16px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-reviews_review-3_3-text {
                color: rgba(67, 65, 59, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-reviews_review-3_4 {
                left: 446px;
                top: 843px;
                width: 308px;
                height: 50px;
            }

            .m .sie-reviews_review-3_4 {
                left: 39px;
                top: 785px;
                width: 242px;
                height: 50px;
            }

            .d .sie-reviews_review-3_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                border-width: 0px;
                background-color: rgba(211, 181, 178, 1);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-reviews_review-3_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                background-color: rgba(211, 181, 178, 1);
            }

            .d .sie-reviews_review-3_5 {
                left: 472px;
                top: 858px;
                width: 257px;
                height: 18px;
            }

            .m .sie-reviews_review-3_5 {
                left: 45px;
                top: 801px;
                width: 230px;
                height: 18px;
            }

            .d .sie-reviews_review-3_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.8;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .m .sie-reviews_review-3_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .d .sie-reviews_review-3_6 {
                left: 424px;
                top: 95px;
                width: 353px;
                height: 17px;
            }

            .m .sie-reviews_review-3_6 {
                left: 39px;
                top: 40px;
                width: 243px;
                height: 16px;
            }

            .d .sie-reviews_review-3_6-text {
                text-align: center;
            }

            .m .sie-reviews_review-3_6-text {
                text-align: center;
            }

            .m .sib-reviews .sis-reviews_review-4 {
                background-color: transparent;
            }

            .d .sib-reviews .sis-reviews_review-4 {
                background-color: transparent;
            }

            .d .sie-reviews_review-4_0 {
                left: 338px;
                top: 336px;
                width: 524px;
                height: 80px;
            }

            .m .sie-reviews_review-4_0 {
                left: 26px;
                top: 324px;
                width: 269px;
                height: 114px;
            }

            .d .sie-reviews_review-4_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-reviews_review-4_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-reviews_review-4_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-reviews_review-4_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-reviews_review-4_0-text {
                font-size: 14px;
                text-align: center;
            }

            .m .sie-reviews_review-4_0-text {
                text-align: center;
            }

            .d .sie-reviews_review-4_0-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-reviews_review-4_1 {
                left: 271px;
                top: 155px;
                width: 682px;
                height: 160px;
            }

            .m .sie-reviews_review-4_1 {
                left: 23px;
                top: 138px;
                width: 274px;
                height: 173px;
            }

            .d .sie-reviews_review-4_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 40px;
                text-align: center;
            }

            .m .sie-reviews_review-4_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 27px;
                text-align: center;
            }

            .d .sie-reviews_review-4_2 {
                left: 509px;
                top: 446px;
                width: 182px;
                height: 46px;
            }

            .m .sie-reviews_review-4_2 {
                left: 63px;
                top: 472px;
                width: 192px;
                height: 57px;
            }

            .d .sie-reviews_review-4_2-text {
                font-size: 20px;
                text-align: center;
            }

            .m .sie-reviews_review-4_2-text {
                font-size: 30px;
                text-align: center;
            }

            .d .sie-reviews_review-4_3 {
                left: 409px;
                top: 797px;
                width: 382px;
                height: 27px;
            }

            .m .sie-reviews_review-4_3 {
                left: 63px;
                top: 744px;
                width: 195px;
                height: 22px;
            }

            .d .sie-reviews_review-4_3-text {
                color: rgba(67, 65, 59, 1);
                text-transform: none;
                line-height: 1.5;
                letter-spacing: 0.1em;
                font-size: 16px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-reviews_review-4_3-text {
                color: rgba(67, 65, 59, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-reviews_review-4_4 {
                left: 446px;
                top: 843px;
                width: 308px;
                height: 50px;
            }

            .m .sie-reviews_review-4_4 {
                left: 39px;
                top: 785px;
                width: 242px;
                height: 50px;
            }

            .d .sie-reviews_review-4_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                border-width: 0px;
                background-color: rgba(211, 181, 178, 1);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-reviews_review-4_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                background-color: rgba(211, 181, 178, 1);
            }

            .d .sie-reviews_review-4_5 {
                left: 472px;
                top: 858px;
                width: 257px;
                height: 18px;
            }

            .m .sie-reviews_review-4_5 {
                left: 45px;
                top: 801px;
                width: 230px;
                height: 18px;
            }

            .d .sie-reviews_review-4_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.8;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .m .sie-reviews_review-4_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .d .sie-reviews_review-4_6 {
                left: 424px;
                top: 95px;
                width: 353px;
                height: 17px;
            }

            .m .sie-reviews_review-4_6 {
                left: 39px;
                top: 40px;
                width: 243px;
                height: 16px;
            }

            .d .sie-reviews_review-4_6-text {
                text-align: center;
            }

            .m .sie-reviews_review-4_6-text {
                text-align: center;
            }

            .m .sib-reviews .sis-reviews_review-5 {
                background-color: transparent;
            }

            .d .sib-reviews .sis-reviews_review-5 {
                background-color: transparent;
            }

            .d .sie-reviews_review-5_0 {
                left: 259px;
                top: 318px;
                width: 682px;
                height: 103px;
            }

            .m .sie-reviews_review-5_0 {
                left: 18px;
                top: 276px;
                width: 285px;
                height: 222px;
            }

            .d .sie-reviews_review-5_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-reviews_review-5_0:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-reviews_review-5_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-reviews_review-5_0-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-reviews_review-5_0-text {
                font-size: 14px;
                text-align: center;
            }

            .m .sie-reviews_review-5_0-text {
                text-align: center;
            }

            .d .sie-reviews_review-5_0-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-reviews_review-5_1 {
                left: 280px;
                top: 139px;
                width: 641px;
                height: 160px;
            }

            .m .sie-reviews_review-5_1 {
                left: 26px;
                top: 90px;
                width: 269px;
                height: 173px;
            }

            .d .sie-reviews_review-5_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 40px;
                text-align: center;
            }

            .m .sie-reviews_review-5_1-text {
                color: rgba(69, 68, 62, 1);
                line-height: 1.3;
                font-size: 27px;
                text-align: center;
            }

            .d .sie-reviews_review-5_2 {
                left: 509px;
                top: 461px;
                width: 182px;
                height: 46px;
            }

            .m .sie-reviews_review-5_2 {
                left: 64px;
                top: 512px;
                width: 192px;
                height: 57px;
            }

            .d .sie-reviews_review-5_2-text {
                font-size: 20px;
                text-align: center;
            }

            .m .sie-reviews_review-5_2-text {
                font-size: 30px;
                text-align: center;
            }

            .d .sie-reviews_review-5_3 {
                left: 409px;
                top: 797px;
                width: 382px;
                height: 27px;
            }

            .m .sie-reviews_review-5_3 {
                left: 63px;
                top: 744px;
                width: 195px;
                height: 22px;
            }

            .d .sie-reviews_review-5_3-text {
                color: rgba(67, 65, 59, 1);
                text-transform: none;
                line-height: 1.5;
                letter-spacing: 0.1em;
                font-size: 16px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-reviews_review-5_3-text {
                color: rgba(67, 65, 59, 1);
                line-height: 1.8;
                letter-spacing: 0.05em;
                font-size: 14px;
                text-align: center;
                font-family: 'Adobe Garamond Pro Italic';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-reviews_review-5_4 {
                left: 446px;
                top: 843px;
                width: 308px;
                height: 50px;
            }

            .m .sie-reviews_review-5_4 {
                left: 39px;
                top: 785px;
                width: 242px;
                height: 50px;
            }

            .d .sie-reviews_review-5_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                border-width: 0px;
                background-color: rgba(211, 181, 178, 1);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-reviews_review-5_4 .se-simple {
                border-color: rgba(67, 65, 59, 0.2);
                background-color: rgba(211, 181, 178, 1);
            }

            .d .sie-reviews_review-5_5 {
                left: 472px;
                top: 858px;
                width: 257px;
                height: 18px;
            }

            .m .sie-reviews_review-5_5 {
                left: 45px;
                top: 801px;
                width: 230px;
                height: 18px;
            }

            .d .sie-reviews_review-5_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.8;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .m .sie-reviews_review-5_5-text {
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                line-height: 1.6;
                letter-spacing: 0.25em;
                font-size: 10px;
                text-align: center;
            }

            .d .sie-reviews_review-5_6 {
                left: 424px;
                top: 95px;
                width: 353px;
                height: 17px;
            }

            .m .sie-reviews_review-5_6 {
                left: 39px;
                top: 40px;
                width: 243px;
                height: 16px;
            }

            .d .sie-reviews_review-5_6-text {
                text-align: center;
            }

            .m .sie-reviews_review-5_6-text {
                text-align: center;
            }

            .d .sie-reviews_1 {
                left: 1077px;
                top: 267px;
                width: 65px;
                height: 53px;
            }

            .m .sie-reviews_1 {
                left: 100px;
                top: 592px;
                width: 61px;
                height: 42px;
            }

            .d .sie-reviews_1 .se-simple {
                border-color: rgba(204, 174, 171, 1);
                border-width: 1px;
                background-color: rgba(69, 68, 62, 0);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-reviews_1 .se-simple {
                border-color: rgba(204, 174, 171, 1);
                border-width: 1px;
                background-color: rgba(69, 68, 62, 0);
                border-style: solid;
                border-radius: inherit;
            }

            .d .sie-reviews_2 {
                left: 79px;
                top: 267px;
                width: 65px;
                height: 53px;
            }

            .m .sie-reviews_2 {
                left: 160px;
                top: 592px;
                width: 61px;
                height: 42px;
            }

            .d .sie-reviews_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-reviews_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-reviews_2 .se-simple:hover {
                transition-duration: 0.5s;
                -webkit-transition-duration: 0.5s;
            }

            .m .sie-reviews_2 .se-simple:hover {
                transition-duration: 0.5s;
                -webkit-transition-duration: 0.5s;
            }

            .d .sie-reviews_2 .se-simple {
                border-color: rgba(204, 174, 171, 1);
                border-width: 1px;
                background-color: rgba(69, 68, 62, 0);
                border-style: solid;
                border-radius: inherit;
            }

            .m .sie-reviews_2 .se-simple {
                border-color: rgba(204, 174, 171, 1);
                border-width: 1px;
                background-color: rgba(69, 68, 62, 0);
                border-style: solid;
                border-radius: inherit;
            }

            .d .sie-reviews_3 {
                left: 1086px;
                top: 279px;
                width: 51px;
                height: 30px;
            }

            .m .sie-reviews_3 {
                left: 171px;
                top: 597px;
                width: 43px;
                height: 38px;
            }

            .d .sie-reviews_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-reviews_3:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-reviews_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-reviews_3-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-reviews_3-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 20px;
                text-align: center;
                font-family: 'Lato';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-reviews_3-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 20px;
                text-align: center;
                font-family: 'Lato';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-reviews_4 {
                left: 84px;
                top: 279px;
                width: 51px;
                height: 30px;
            }

            .m .sie-reviews_4 {
                left: 108px;
                top: 590px;
                width: 43px;
                height: 38px;
            }

            .d .sie-reviews_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-reviews_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-reviews_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-reviews_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-reviews_4-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 20px;
                text-align: center;
                font-family: 'Lato';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-reviews_4-text {
                color: rgba(204, 174, 171, 1);
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 20px;
                text-align: center;
                font-family: 'Lato';
                font-weight: 400;
                font-style: normal;
            }

            .sib-4-secrets-opt-in {
                z-index: 1;
            }

            .m .sib-4-secrets-opt-in {
                height: 700px;
            }

            .d .sib-4-secrets-opt-in {
                height: 590px;
            }

            .m .sib-4-secrets-opt-in .ss-bg {
                background-color: rgba(229, 219, 216, 1);
            }

            .d .sib-4-secrets-opt-in .ss-bg {
                background-color: rgba(229, 219, 216, 1);
            }

            .d .sie-4-secrets-opt-in_0 {
                left: 0px;
                top: 0px;
                width: 600px;
                height: 590px;
            }

            .m .sie-4-secrets-opt-in_0 {
                left: 52px;
                top: 52px;
                width: 216px;
                height: 216px;
            }

            .d .sie-4-secrets-opt-in_0 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 70% 70%;
            }

            .m .sie-4-secrets-opt-in_0 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 99% 99%;
            }

            .d .sie-4-secrets-opt-in_1 {
                left: 538px;
                top: 95px;
                width: 531px;
                height: 60px;
            }

            .m .sie-4-secrets-opt-in_1 {
                left: 16px;
                top: 298px;
                width: 320px;
                height: 73px;
            }

            .d .sie-4-secrets-opt-in_1-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.2;
                letter-spacing: 0em;
                font-size: 70px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-4-secrets-opt-in_1-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.2;
                letter-spacing: 0em;
                font-size: 50px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-4-secrets-opt-in_2 {
                left: 683px;
                top: 183px;
                width: 472px;
                height: 206px;
            }

            .m .sie-4-secrets-opt-in_2 {
                left: 23px;
                top: 352px;
                width: 275px;
                height: 190px;
            }

            .d .sie-4-secrets-opt-in_2-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                line-height: 1;
                font-size: 50px;
                text-align: center;
                overflow: hidden;
            }

            .m .sie-4-secrets-opt-in_2-text {
                text-align: center;
                overflow: hidden;
            }

            .d .sie-4-secrets-opt-in_3 {
                left: 815px;
                top: 424px;
                width: 183px;
                height: 50px;
            }

            .m .sie-4-secrets-opt-in_3 {
                left: 72px;
                top: 581px;
                width: 176px;
                height: 50px;
            }

            .d .sie-4-secrets-opt-in_3 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .m .sie-4-secrets-opt-in_3 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-4-secrets-opt-in_4 {
                left: 835px;
                top: 441px;
                width: 143px;
                height: 15px;
            }

            .m .sie-4-secrets-opt-in_4 {
                left: 90px;
                top: 598px;
                width: 140px;
                height: 20px;
            }

            .d .sie-4-secrets-opt-in_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-4-secrets-opt-in_4:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-4-secrets-opt-in_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-4-secrets-opt-in_4-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-4-secrets-opt-in_4-text {
                color: rgba(69, 68, 62, 1);
                text-transform: uppercase;
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-4-secrets-opt-in_4-text {
                color: rgba(69, 68, 62, 1);
                text-transform: uppercase;
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .sib-footer {
                z-index: 3;
            }

            .m .sib-footer {
                height: 1200px;
            }

            .d .sib-footer {
                height: 680px;
            }

            .m .sib-footer .ss-bg {
                background-color: rgba(247, 245, 244, 1);
            }

            .d .sib-footer .ss-bg {
                background-color: rgba(247, 245, 244, 1);
            }

            .d .sie-footer_0 {
                left: 241px;
                top: 398px;
                width: 2395px;
                height: 239px;
            }

            .m .sie-footer_0 {
                left: 0px;
                top: 923px;
                width: 1064px;
                height: 132px;
            }

            .d .sie-footer_0 .si-embed {
                transform-origin: left top 0;
                transform: scale(1, 1);
                width: 2395px;
                height: 239px;
            }

            .m .sie-footer_0 .si-embed {
                transform-origin: left top 0;
                transform: scale(1, 1);
                width: 1064px;
                height: 132px;
            }

            .d .sie-footer_1 {
                left: 0px;
                top: 637px;
                width: 1200px;
                height: 43px;
            }

            .m .sie-footer_1 {
                left: 0px;
                top: 1134px;
                width: 320px;
                height: 68px;
            }

            .d .sie-footer_1 .se-simple {
                background-color: rgba(204, 174, 171, 1);
            }

            .m .sie-footer_1 .se-simple {
                background-color: rgba(204, 174, 171, 1);
            }

            .d .sie-footer_2 {
                left: 1165px;
                top: 644px;
                width: 24px;
                height: 18px;
            }

            .m .sie-footer_2 {
                left: 296px;
                top: 1168px;
                width: 20px;
                height: 20px;
            }

            .d .sie-footer_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_2:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_2-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_2-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_2-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 14px;
                text-align: left;
            }

            .m .sie-footer_2-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.5;
                letter-spacing: 0.2em;
                font-size: 14px;
                text-align: left;
            }

            .d .sie-footer_3 {
                left: 375px;
                top: 648px;
                width: 200px;
                height: 27px;
            }

            .m .sie-footer_3 {
                left: 48px;
                top: 1149px;
                width: 207px;
                height: 14px;
            }

            .d .sie-footer_3-text {
                color: rgba(255, 255, 255, 1);
                font-size: 11px;
                text-align: left;
                overflow: hidden;
            }

            .m .sie-footer_3-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.6;
                font-size: 10px;
                text-align: left;
                overflow: hidden;
            }

            .d .sie-footer_3-text.se-rc a {
                color: rgba(255, 255, 255, 1);
                text-decoration: none;
            }

            .m .sie-footer_3-text.se-rc a {
                color: rgba(255, 255, 255, 1);
            }

            .m .sie-footer_3-text.se-rc a:hover {
                color: rgba(255, 255, 255, 1);
                opacity: 0.8;
            }

            .d .sie-footer_4 {
                left: 647px;
                top: 301px;
                width: 19px;
                height: 19px;
            }

            .m .sie-footer_4 {
                left: 108px;
                top: 653px;
                width: 18px;
                height: 18px;
            }

            .d .sie-footer_4 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-footer_4 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .d .sie-footer_5 {
                left: 740px;
                top: 303px;
                width: 16px;
                height: 16px;
            }

            .m .sie-footer_5 {
                left: 198px;
                top: 655px;
                width: 14px;
                height: 14px;
            }

            .d .sie-footer_5 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-footer_5 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .d .sie-footer_6 {
                left: 676px;
                top: 302px;
                width: 18px;
                height: 18px;
            }

            .m .sie-footer_6 {
                left: 136px;
                top: 653px;
                width: 18px;
                height: 18px;
            }

            .d .sie-footer_6 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-footer_6 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .d .sie-footer_7 {
                left: 91px;
                top: 178px;
                width: 40px;
                height: 23px;
            }

            .m .sie-footer_7 {
                left: 37px;
                top: 89px;
                width: 47px;
                height: 21px;
            }

            .d .sie-footer_7:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_7:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_7-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_7-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_7-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-footer_7-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-footer_8 {
                left: 91px;
                top: 213px;
                width: 58px;
                height: 23px;
            }

            .m .sie-footer_8 {
                left: 37px;
                top: 123px;
                width: 54px;
                height: 21px;
            }

            .d .sie-footer_8:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_8:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_8-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_8-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_8-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-footer_8-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-footer_9 {
                left: 91px;
                top: 249px;
                width: 50px;
                height: 23px;
            }

            .m .sie-footer_9 {
                left: 37px;
                top: 157px;
                width: 46px;
                height: 21px;
            }

            .d .sie-footer_9:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_9:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_9-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_9-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_9-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-footer_9-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-footer_10 {
                left: 206px;
                top: 177px;
                width: 97px;
                height: 23px;
            }

            .m .sie-footer_10 {
                left: 131px;
                top: 89px;
                width: 69px;
                height: 21px;
            }

            .d .sie-footer_10:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_10:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_10-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_10-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_10-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-footer_10-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-footer_11 {
                left: 206px;
                top: 213px;
                width: 172px;
                height: 23px;
            }

            .m .sie-footer_11 {
                left: 131px;
                top: 123px;
                width: 123px;
                height: 21px;
            }

            .d .sie-footer_11:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_11:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_11-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_11-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_11-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-footer_11-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-footer_12 {
                left: 206px;
                top: 248px;
                width: 152px;
                height: 23px;
            }

            .m .sie-footer_12 {
                left: 131px;
                top: 157px;
                width: 139px;
                height: 21px;
            }

            .d .sie-footer_12:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_12:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_12-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_12-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_12-text {
                color: rgba(69, 68, 62, 1);
                font-size: 11px;
                text-align: left;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-footer_12-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-footer_13 {
                left: 0px;
                top: 398px;
                width: 242px;
                height: 239px;
            }

            .m .sie-footer_13 {
                left: 39px;
                top: 203px;
                width: 183px;
                height: 44px;
                display: none;
            }

            .d .sie-footer_13 .se-simple {
                background-color: rgba(229, 219, 216, 1);
            }

            .m .sie-footer_13 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-footer_14 {
                left: 0px;
                top: 637px;
                width: 1200px;
                height: 43px;
                display: none;
            }

            .m .sie-footer_14 {
                left: 0px;
                top: 715px;
                width: 320px;
                height: 210px;
            }

            .d .sie-footer_14 .se-simple {
                background-color: rgba(204, 174, 171, 1);
            }

            .m .sie-footer_14 .se-simple {
                background-color: rgba(229, 219, 216, 1);
            }

            .d .sie-footer_15 {
                left: 649px;
                top: 179px;
                width: 246px;
                height: 112px;
            }

            .m .sie-footer_15 {
                left: 54px;
                top: 548px;
                width: 213px;
                height: 92px;
            }

            .d .sie-footer_15-text {
                overflow: hidden;
            }

            .m .sie-footer_15-text {
                font-size: 12px;
                text-align: center;
                overflow: hidden;
            }

            .d .sie-footer_15-text.se-rc a:hover {
                color: rgba(69, 68, 62, 1);
            }

            .d .sie-footer_16 {
                left: 706px;
                top: 302px;
                width: 18px;
                height: 18px;
            }

            .m .sie-footer_16 {
                left: 165px;
                top: 653px;
                width: 18px;
                height: 18px;
            }

            .d .sie-footer_16 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .m .sie-footer_16 svg {
                fill: rgba(204, 174, 171, 1);
            }

            .d .sie-footer_17 {
                left: 23px;
                top: 446px;
                width: 189px;
                height: 61px;
            }

            .m .sie-footer_17 {
                left: 69px;
                top: 748px;
                width: 181px;
                height: 92px;
            }

            .d .sie-footer_17-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                line-height: 1.2;
                letter-spacing: 0em;
                font-size: 42px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-footer_17-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                line-height: 1.2;
                letter-spacing: 0em;
                font-size: 35px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-footer_18 {
                left: 925px;
                top: 54px;
                width: 224px;
                height: 289px;
            }

            .m .sie-footer_18 {
                left: 32px;
                top: 208px;
                width: 256px;
                height: 266px;
            }

            .d .sie-footer_18 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .m .sie-footer_18 .se-img {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .d .sie-footer_19 {
                left: 22px;
                top: 572px;
                width: 199px;
                height: 39px;
            }

            .m .sie-footer_19 {
                left: 55px;
                top: 846px;
                width: 208px;
                height: 44px;
            }

            .d .sie-footer_19 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .m .sie-footer_19 .se-simple {
                background-color: rgba(255, 255, 255, 1);
            }

            .d .sie-footer_20 {
                left: 24px;
                top: 583px;
                width: 194px;
                height: 18px;
            }

            .m .sie-footer_20 {
                left: 60px;
                top: 859px;
                width: 199px;
                height: 22px;
            }

            .d .sie-footer_20:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_20:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_20-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_20-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_20-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Commuters Semi';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-footer_20-text {
                color: rgba(69, 68, 62, 1);
                font-size: 10px;
                text-align: center;
                font-family: 'Comm Sans SemiBold';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-footer_21 {
                left: 647px;
                top: 83px;
                width: 260px;
                height: 89px;
            }

            .m .sie-footer_21 {
                left: 22px;
                top: 505px;
                width: 283px;
                height: 33px;
            }

            .d .sie-footer_21:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_21:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_21-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_21-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_21-text {
                text-transform: none;
                letter-spacing: 0em;
                font-size: 41px;
                text-align: left;
            }

            .m .sie-footer_21-text {
                font-size: 27px;
                text-align: center;
            }

            .d .sie-footer_22 {
                left: 91px;
                top: 110px;
                width: 296px;
                height: 48px;
            }

            .m .sie-footer_22 {
                left: 35px;
                top: 39px;
                width: 198px;
                height: 29px;
            }

            .d .sie-footer_22:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .m .sie-footer_22:hover {
                opacity: 0.5;
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: opacity;
            }

            .d .sie-footer_22-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .m .sie-footer_22-text:hover {
                transition-duration: 0.25s;
                -webkit-transition-duration: 0.25s;
                transition-property: color, size, letter-spacing;
            }

            .d .sie-footer_22-text {
                text-transform: none;
                letter-spacing: 0em;
                font-size: 42px;
                text-align: left;
            }

            .m .sie-footer_22-text {
                font-size: 30px;
                text-align: left;
            }

            .d .sie-footer_23 {
                left: 574px;
                top: 648px;
                width: 50px;
                height: 27px;
            }

            .m .sie-footer_23 {
                left: 231px;
                top: 1148px;
                width: 42px;
                height: 14px;
            }

            .d .sie-footer_23-text {
                color: rgba(255, 255, 255, 1);
                font-size: 11px;
                text-align: left;
                overflow: hidden;
            }

            .m .sie-footer_23-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.6;
                font-size: 10px;
                text-align: left;
                overflow: hidden;
            }

            .d .sie-footer_24 {
                left: 620px;
                top: 648px;
                width: 50px;
                height: 27px;
            }

            .m .sie-footer_24 {
                left: 69px;
                top: 1167px;
                width: 49px;
                height: 15px;
            }

            .d .sie-footer_24-text {
                color: rgba(255, 255, 255, 1);
                font-size: 11px;
                text-align: left;
                overflow: hidden;
            }

            .m .sie-footer_24-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.6;
                font-size: 10px;
                text-align: left;
                overflow: hidden;
            }

            .d .sie-footer_25 {
                left: 673px;
                top: 648px;
                width: 79px;
                height: 27px;
            }

            .m .sie-footer_25 {
                left: 116px;
                top: 1167px;
                width: 65px;
                height: 14px;
            }

            .d .sie-footer_25-text {
                color: rgba(255, 255, 255, 1);
                font-size: 11px;
                text-align: left;
                overflow: hidden;
            }

            .m .sie-footer_25-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.6;
                font-size: 10px;
                text-align: left;
                overflow: hidden;
            }

            .d .sie-footer_26 {
                left: 747px;
                top: 648px;
                width: 79px;
                height: 27px;
            }

            .m .sie-footer_26 {
                left: 182px;
                top: 1167px;
                width: 70px;
                height: 13px;
            }

            .d .sie-footer_26-text {
                color: rgba(255, 255, 255, 1);
                font-size: 11px;
                text-align: left;
                overflow: hidden;
            }

            .m .sie-footer_26-text {
                color: rgba(255, 255, 255, 1);
                line-height: 1.6;
                font-size: 10px;
                text-align: left;
                overflow: hidden;
            }

            .d .sie-footer_27 {
                left: 26px;
                top: 493px;
                width: 189px;
                height: 61px;
            }

            .m .sie-footer_27 {
                left: 69px;
                top: 787px;
                width: 181px;
                height: 47px;
            }

            .d .sie-footer_27-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                line-height: 1.2;
                letter-spacing: 0em;
                font-size: 42px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .m .sie-footer_27-text {
                color: rgba(69, 68, 62, 1);
                text-transform: none;
                line-height: 1.2;
                letter-spacing: 0em;
                font-size: 35px;
                text-align: center;
                font-family: 'Segatha';
                font-weight: 400;
                font-style: normal;
            }

            .d .sie-footer_28 {
                left: 241px;
                top: 398px;
                width: 2395px;
                height: 239px;
                display: none;
            }

            .m .sie-footer_28 {
                left: -320px;
                top: 1029px;
                width: 1064px;
                height: 108px;
            }

            .d .sie-footer_28 .si-embed {
                transform-origin: left top 0;
                transform: scale(1, 1);
                width: 2395px;
                height: 239px;
            }

            .m .sie-footer_28 .si-embed {
                transform-origin: left top 0;
                transform: scale(1, 1);
                width: 1064px;
                height: 108px;
            }
        </style> -->

        
        <!-- <script type="text/javascript">
            ! function(e, a, t) {
                var n, r, o, i = a.createElement("canvas"),
                    p = i.getContext && i.getContext("2d");

                function s(e, t) {
                    var a = String.fromCharCode;
                    p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                    e = i.toDataURL();
                    return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
                }

                function c(e) {
                    var t = a.createElement("script");
                    t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
                }




            }(window, document, window._wpemojiSettings);
        </script> -->
        <!-- <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style> -->
        <!-- <link rel='stylesheet' id='wp-block-library-css'
            href='<?php echo get_template_directory_uri(); ?>/css/style.min.css' type='text/css' media='all' />
        <style id='wp-block-library-inline-css' type='text/css'>
            .has-text-align-justify {
                text-align: justify;
            }
        </style> -->

        <!-- <link rel='stylesheet' id='wpdreams-ajaxsearchlite-css' href='<?php echo get_template_directory_uri(); ?>/css/style-underline.css?ver=4.9.5' type='text/css'media='all' /> -->

        <!-- <style>
            #powered-by {
                display: none;
            }

            #cky-consent,
            #cky-settings-popup,
            #cky-btn-settings,
            #cky-btn-reject,
            #cky-btn-accept,
            #cky-btn-custom-accept {
                font-family: 'Montserrat';
            }
        </style> -->

        <!-- <style type="text/css" data-source="Grow Social by Mediavine">
            @media screen and (max-width: 720px) {

                .dpsp-content-wrapper.dpsp-hide-on-mobile,
                .dpsp-share-text.dpsp-hide-on-mobile,
                .dpsp-content-wrapper .dpsp-network-label {
                    display: none;
                }

                .dpsp-has-spacing .dpsp-networks-btns-wrapper li {
                    margin: 0 2% 10px 0;
                }

                .dpsp-network-btn.dpsp-has-label:not(.dpsp-has-count) {
                    max-height: 40px;
                    padding: 0;
                    justify-content: center;
                }

                .dpsp-content-wrapper.dpsp-size-small .dpsp-network-btn.dpsp-has-label:not(.dpsp-has-count) {
                    max-height: 32px;
                }

                .dpsp-content-wrapper.dpsp-size-large .dpsp-network-btn.dpsp-has-label:not(.dpsp-has-count) {
                    max-height: 46px;
                }
            }

            .dpsp-button-style-1 .dpsp-networks-btns-content .dpsp-network-btn .dpsp-network-icon,
            .dpsp-button-style-1 .dpsp-networks-btns-content .dpsp-network-btn {
                --customNetworkColor: #000000;
                --customNetworkHoverColor: #ebc0c3;
                background: #000000;
                border-color: #000000;
            }

            .dpsp-button-style-1 .dpsp-networks-btns-content .dpsp-network-btn:hover .dpsp-network-icon,
            .dpsp-button-style-1 .dpsp-networks-btns-content .dpsp-network-btn:focus .dpsp-network-icon,
            .dpsp-button-style-1 .dpsp-networks-btns-content .dpsp-network-btn:hover,
            .dpsp-button-style-1 .dpsp-networks-btns-content .dpsp-network-btn:focus {
                border-color: #ebc0c3 !important;
                background: #ebc0c3 !important;
            }

            .dpsp-networks-btns-wrapper.dpsp-networks-btns-content .dpsp-network-btn {
                --networkHover: rgba(235, 192, 195, 0.4);
                --networkAccent: rgba(235, 192, 195, 1);
            }

            @media screen and (max-width: 720px) {
                #dpsp-floating-sidebar.dpsp-hide-on-mobile.opened {
                    display: none;
                }
            }

            .dpsp-button-style-1 .dpsp-networks-btns-sidebar .dpsp-network-btn {
                --customNetworkColor: #000000;
                --customNetworkHoverColor: #ebc0c3;
                background: #000000;
                border-color: #000000;
            }

            .dpsp-button-style-1 .dpsp-networks-btns-sidebar .dpsp-network-btn:hover,
            .dpsp-button-style-1 .dpsp-networks-btns-sidebar .dpsp-network-btn:focus {
                border-color: #ebc0c3 !important;
                background: #ebc0c3 !important;
            }

            .dpsp-networks-btns-wrapper.dpsp-networks-btns-sidebar .dpsp-network-btn {
                --networkHover: rgba(235, 192, 195, 0.4);
                --networkAccent: rgba(235, 192, 195, 1);
            }

            @media screen and (max-width: 720px) {
                #dpsp-floating-sidebar.dpsp-hide-on-mobile.opened {
                    display: none;
                }
            }

            .dpsp-button-style-1 .dpsp-networks-btns-sidebar .dpsp-network-btn {
                --customNetworkColor: #000000;
                --customNetworkHoverColor: #ebc0c3;
                background: #000000;
                border-color: #000000;
            }

            .dpsp-button-style-1 .dpsp-networks-btns-sidebar .dpsp-network-btn:hover,
            .dpsp-button-style-1 .dpsp-networks-btns-sidebar .dpsp-network-btn:focus {
                border-color: #ebc0c3 !important;
                background: #ebc0c3 !important;
            }

            .dpsp-networks-btns-wrapper.dpsp-networks-btns-sidebar .dpsp-network-btn {
                --networkHover: rgba(235, 192, 195, 0.4);
                --networkAccent: rgba(235, 192, 195, 1);
            }
        </style> -->

        <!-- <style type='text/css'>
            img#wpstats {
                display: none
            }
        </style> -->

        <!-- <script>
            document.documentElement.classList.add(
                'jetpack-lazy-images-js-enabled'
            );
        </script> -->
        <!-- <style>
            div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label {
                font-size: 0px !important;
                color: rgba(0, 0, 0, 0);
            }

            div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label:after {
                font-size: 11px !important;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
            }

            div[id*='ajaxsearchlite'].wpdreams_asl_container {
                width: 100%;
                margin: 0px 0px 0px 0px;
            }

            div[id*='ajaxsearchliteres'].wpdreams_asl_results div.resdrg span.highlighted {
                font-weight: bold;
                color: rgba(217, 49, 43, 1);
                background-color: rgba(238, 238, 238, 1);
            }

            div[id*='ajaxsearchliteres'].wpdreams_asl_results .results div.asl_image {
                width: 70px;
                height: 70px;
                background-size: cover;
                background-repeat: no-repeat;
            }

            div.asl_r .results {
                max-height: none;
            }

            .asl_m,
            .asl_m .probox {
                background-color: rgb(255, 255, 255) !important;
                background-image: none !important;
                -webkit-background-image: none !important;
                -ms-background-image: none !important;
            }

            .asl_m .probox svg {
                fill: #e0c4c2 !important;
            }

            .asl_m .probox .innericon {
                background-color: rgba(255, 255, 255, 1) !important;
                background-image: none !important;
                -webkit-background-image: none !important;
                -ms-background-image: none !important;
            }

            div.asl_m.asl_w {
                border: 1px solid rgb(0, 0, 0) !important;
                border-radius: 0px 0px 0px 0px !important;
                box-shadow: none !important;
            }

            div.asl_m.asl_w .probox {
                border: none !important;
            }

            div.asl_r.asl_w.vertical .results .item::after {
                display: block;
                position: absolute;
                bottom: 0;
                content: '';
                height: 1px;
                width: 100%;
                background: #D8D8D8;
            }

            div.asl_r.asl_w.vertical .results .item.asl_last_item::after {
                display: none;
            }

            .sqs-block-html .sqs-block-content>*:last-child {
                margin-bottom: 0;
            }

            .sqs-block-html .sqs-block-content>*:first-child {
                margin-top: 0;
            }

            .sqs-block-html .sqs-block-content *:not(h1):not(h2):not(h3) {
                word-wrap: break-word;
            }

            .black .sqsrte-large {
                color: #fff;
            }

            .sqsrte-large,
            p,
            .sqsrte-small {
                margin: 1rem 0;
            }

            @media screen and (min-width: 0) and (max-width: 1483px) and (orientation: landscape) {
                .sqsrte-large {
                    font-size: calc((3.2 - 1) * 1.2vw + 1rem);
                }
            }

            .custom-color-main {
                color: #d08c91;
            }

            .custom-color-accent {
                color: #efc3b8;
            }

            .custom-minor-accent {
                color: #c9d2e3
            }

            #press {
                top: 48px;
            }

            .rowSection {
                /* margin-top: 53px; */
                text-align: center;
                /* background-color: black;
                display: table;
                width: 100%;
                height: 144px;
                table-layout: fixed; */
                background-color: black;
                position: relative;

            }

            .Column {
                display: table-cell;

                margin: 0;
                /* 
                top: 50%;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%); */

            }

            /* .innercontent {
                margin-top: 12%;
                font-size: 18px;
            } */

            .rowSection-partnership {
                margin-top: 183px;

            }

            

            .custom-font-size {
                color: hsl(0, 100%, 100%);
                font-size: 38px;
            }

            .custom-font-size-2 {
                color: hsl(0, 100%, 100%);
                font-size: 25px;
            }

            .font-size-1 {
                font-size: 45px !important;
            }
            .font-size-3 {
                font-size: 50px;
            }

            /* #biography {
                height: 779px;
                
            } */
            .backgrond-attached {
            background-image: url("https://jthemes.net/themes/wp/testo/wp-content/uploads/2021/03/divider-03.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 300px 0px 300px 0px;
            }
            #work-together{
                margin-top:-2px;
            }
            #spacer{
                background-color: rgba(204,174,171,1);
                background-color: rgba(204,174,171,1);
                padding: 10px;
                height: 96px;

            }
            .font-size-2{
                font-size:10px !important;
            }
            .canvas4-margin{
                top: 315px !important;
            }
            .canvas5-margin{
                top: 332px !important;
            }
            .custom-margin-top{
                margin-top: 82px !important;
            }
            .custom-button-color{
                background-color: rgba(204,174,171,1) !important;
                border-radius: 0 !important;
                color:rgba(255,255,255,1) !important;

            }
            .se-img-cover{
                width: 528px !important;
                height: 487px !important;
                object-fit: cover !important;
            }


            .custom-button-color:hover {
                opacity: 0.5 !important;
                transition-duration: 0.25s !important;
                -webkit-transition-duration: 0.25s !important;
                transition-property: opacity !important;
            }
            .blink_me {
            animation: blinker 1s linear infinite;
            }

            @keyframes blinker {
            10% {
                opacity: 0;
            }
            }
            #main-content {
                margin-top: -109px;
                position: relative;
            }

            .logo {
                font-family: 'Sign Style';
                font-weight: normal;
                font-style: normal;
                font-display: swap;
                font-size: 3rem;
            }
            #datasection .innercontent .custom-color-accent {
                font-weight: 700;
                font-size: 2rem;
            }
            #datasection .innercontent .custom-minor-accent {
                font-size: .7rem;
                margin-bottom: 0;
            }
            #biography #brand-bio-1 { height: 780px !important; }
        </style> -->

        <!-- <script type="text/javascript">
            if (typeof _ASL !== "undefined" && _ASL !== null && typeof _ASL.initialize !== "undefined") {
                _ASL.initialize();
            }
        </script> -->
    </head>

    <body class="home">
        <div id="si-sp" class="sp" data-wp-ver="2.4.0">
            <div id="sticky-menu-open" data-bid="sticky-menu-open" class="d-none sb sib-sticky-menu-open sb-nd-wH sb-lm sb-ld">
                <div class="ss-s ss-bg">
                    <div class="sc" style="width:1200px;">
                        <div data-sid="sticky-menu-open_0" class="sie-sticky-menu-open_0 se">
                            <div class="se-simple"></div>
                        </div>
                        <div data-sid="sticky-menu-open_1" class="sie-sticky-menu-open_1 se">
                            <div class="se-simple"></div>
                        </div>
                        <a href="/sales" target="_self" class="sie-sticky-menu-open_2 se  se-pc"
                            data-sid="sticky-menu-open_2">
                            <div class="se-t sie-sticky-menu-open_2-text st-m-subheading st-d-heading">Contact</div>
                        </a>
                        <a href="/learn-from-me" target="_self" class="sie-sticky-menu-open_3 se  se-pc"
                            data-sid="sticky-menu-open_3">
                            <div class="se-t sie-sticky-menu-open_3-text st-m-subheading st-d-heading">learn from me</div>
                        </a>
                        <div data-sid="sticky-menu-open_4" class="sie-sticky-menu-open_4 se">
                            <div class="se-simple"></div>
                        </div>
                        <div data-sid="sticky-menu-open_5" class="sie-sticky-menu-open_5 se">
                            <div class="se-simple"></div>
                        </div>
                        <a href="/podcasts" target="_self" class="sie-sticky-menu-open_6 se  se-pc"
                            data-sid="sticky-menu-open_6">
                            <div class="se-t sie-sticky-menu-open_6-text st-m-subheading st-d-heading">podcast</div>
                        </a>
                        <div data-sid="sticky-menu-open_7" class="sie-sticky-menu-open_7 se">
                            <div class="se-simple"></div>
                        </div>
                        <a href="/blog" target="_self" class="sie-sticky-menu-open_8 se  se-pc"
                            data-sid="sticky-menu-open_8">
                            <div class="se-t sie-sticky-menu-open_8-text st-m-subheading st-d-heading">BLOG</div>
                        </a>
                        <div data-sid="sticky-menu-open_9" class="sie-sticky-menu-open_9 se">
                            <div class="se-simple"></div>
                        </div>
                        <a href="/sales" target="_self" class="sie-sticky-menu-open_10 se  se-pc"
                            data-sid="sticky-menu-open_10">
                            <div class="se-t sie-sticky-menu-open_10-text st-m-subheading st-d-heading">About</div>
                        </a>
                        <div data-sid="sticky-menu-open_11" class="sie-sticky-menu-open_11 se">
                            <div class="se-simple"></div>
                        </div>
                        <a href="/home" target="_self" class="sie-sticky-menu-open_12 se  se-pc"
                            data-sid="sticky-menu-open_12">
                            <div class="se-t sie-sticky-menu-open_12-text st-m-subheading st-d-heading">Home</div>
                        </a>
                        <div data-sid="sticky-menu-open_13" class="sie-sticky-menu-open_13 se">
                            <h1 class="se-t sie-sticky-menu-open_13-text st-m-title st-d-title se-rc">NAVIGATE</h1>
                        </div>
                        <div data-sid="sticky-menu-open_14" class="sie-sticky-menu-open_14 se  se-pc">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                    <polygon
                                        points="405 121.8 390.2 107 256 241.2 121.8 107 107 121.8 241.2 256 107 390.2 121.8 405 256 270.8 390.2 405 405 390.2 270.8 256 405 121.8" />
                                </svg></div>
                        </div>
                        <a href="https://www.instagram.com/christinagalbato/" target="_blank"
                            class="sie-sticky-menu-open_15 se" data-sid="sticky-menu-open_15">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                    <circle cx="256" cy="255.833" r="80"></circle>
                                    <path
                                        d="M177.805 176.887c21.154-21.154 49.28-32.93 79.195-32.93s58.04 11.838 79.195 32.992c13.422 13.42 23.01 29.55 28.232 47.55H448.5v-113c0-26.51-20.49-47-47-47h-288c-26.51 0-49 20.49-49 47v113h85.072c5.222-18 14.81-34.19 28.233-47.614zM416.5 147.7c0 7.07-5.73 12.8-12.8 12.8h-38.4c-7.07 0-12.8-5.73-12.8-12.8v-38.4c0-7.07 5.73-12.8 12.8-12.8h38.4c7.07 0 12.8 5.73 12.8 12.8v38.4zm-80.305 187.58c-21.154 21.153-49.28 32.678-79.195 32.678s-58.04-11.462-79.195-32.616c-21.115-21.115-32.76-49.842-32.803-78.842H64.5v143c0 26.51 22.49 49 49 49h288c26.51 0 47-22.49 47-49v-143h-79.502c-.043 29-11.687 57.664-32.803 78.78z">
                                    </path>
                                </svg></div>
                        </a>
                        <a href="https://www.facebook.com/christinagalbato" target="_blank"
                            class="sie-sticky-menu-open_16 se" data-sid="sticky-menu-open_16">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                    <path
                                        d="M288 192v-38.1c0-17.2 3.8-25.9 30.5-25.9H352V64h-55.9c-68.5 0-91.1 31.4-91.1 85.3V192h-45v64h45v192h83V256h56.4l7.6-64h-64z" />
                                </svg></div>
                        </a>
                        <a href="https://www.youtube.com/christinagalbato" target="_blank"
                            class="sie-sticky-menu-open_17 se" data-sid="sticky-menu-open_17">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                    <path
                                        d="M508.6 148.8c0-45-33.1-81.2-74-81.2C379.2 65 322.7 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.6-.1 220.2 0 255.8c-.1 35.6 1 71.2 3.4 106.9 0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8 60.8.2 120.3-1 178.6-3.8 40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107 .2-35.6-.9-71.2-3.3-106.9zM207 353.9V157.4l145 98.2-145 98.3z" />
                                </svg></div>
                        </a>
                        <a href="https://www.pinterest.com/christinagalbato/_created/" target="_blank"
                            class="sie-sticky-menu-open_18 se" data-sid="sticky-menu-open_18">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 14.86 19.797">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.214 13.09c-.582 2.575-1.407 5.724-2.982 6.707-1.085-3.298 1.36-7.14 1.445-10.41.055-2.167-.582-5.76 2.81-4.71 1.98 1.833-2.587 6.97.618 7.822 1.667.45 2.77-1.022 3.06-1.49 2.57-4.148.63-9.493-4.07-9.106-2.707.23-4.923 2.725-4.854 5.612.042 1.72 1.32 1.686.523 3.99C1.586 11.35.853 10.323.62 9.792-2.575 2.74 7.365-2.794 12.593 1.52c4.34 3.576 2.138 13.502-3.936 12.99-1.127-.102-1.68-.662-2.443-1.42z">
                                    </path>
                                </svg></div>
                        </a>
                        <a href="" target="_blank" class="sie-sticky-menu-open_19 se" data-sid="sticky-menu-open_19">
                            <div class="se-simple"></div>
                        </a>
                        <!-- <a href="https://learn.christinagalbato.com/users/sign_in" target="_blank"
                            class="sie-sticky-menu-open_20 se" data-sid="sticky-menu-open_20">
                            <nav class="se-t sie-sticky-menu-open_20-text st-m-subheading st-d-heading">Student Login</nav>
                        </a> -->
                        <a href="/success-stories" target="_self" class="sie-sticky-menu-open_21 se  se-pc"
                            data-sid="sticky-menu-open_21">
                            <div class="se-t sie-sticky-menu-open_21-text st-m-subheading st-d-heading">Success stories
                            </div>
                        </a>
                        <div data-sid="sticky-menu-open_22" class="sie-sticky-menu-open_22 se">
                            <div style="width:100%;height:100%;" data-img="sticky-menu-open_22" class="se-img se-gr slzy">
                            </div><noscript><img src="https://static.showit.co/200/FA52ImbjRA2UIbwyNcRHKA/106069/cg_17.jpg"
                                    class="se-img" alt="CG 17" title="CG 17"></noscript>
                        </div>
                        <div data-sid="sticky-menu-open_23" class="sie-sticky-menu-open_23 se">
                            <div style="width:100%;height:100%;" data-img="sticky-menu-open_23" class="se-img se-gr slzy">
                            </div><noscript><img
                                    src="https://static.showit.co/400/rOuFbZENR5uk1BTWK0kJOA/106069/christina-9_1.jpg"
                                    class="se-img" alt="Christina-9 (1)" title="Christina-9 (1)"></noscript>
                        </div>
                        <div data-sid="sticky-menu-open_24" class="sie-sticky-menu-open_24 se">
                            <h3 class="se-t sie-sticky-menu-open_24-text st-m-subheading st-d-subheading se-rc">Hey hey!
                                <br>I'm Christina!
                            </h3>
                        </div>
                        <div data-sid="sticky-menu-open_25" class="sie-sticky-menu-open_25 se">
                            <h1 class="se-t sie-sticky-menu-open_25-text st-m-title st-d-paragraph se-rc">I’m an online
                                business educator for influencers who are ready to grow smart, profitable businesses that no
                                9-to-5 could ever compete with.&nbsp;<br><br></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-menu-closed" class="d-none" data-bid="sticky-menu-closed"
                class="sb sib-sticky-menu-closed sb-nd-wH sb-lm sb-ld">
                <div class="ss-s ss-bg">
                    <div class="sc" style="width:1200px;">
                        <div data-sid="sticky-menu-closed_0" class="sie-sticky-menu-closed_0 se  se-pc">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                    <path d="M0 144h512v32H0zM0 240h512v32H0zM0 336h512v32H0z" />
                                </svg></div>
                        </div>
                        <a href="#si-sp" target="_self" class="sie-sticky-menu-closed_1 se  se-sl"
                            data-sid="sticky-menu-closed_1">
                            <div class="se-icon"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 47.67 21.33">
                                    <title>arrow</title>
                                    <path
                                        d="M33.28 7.26l1.84 2.87h-24.3v1.07h24.3l-1.84 2.87c.29.35 3.55-3 3.57-3.36s-3.26-3.78-3.57-3.45z">
                                    </path>
                                </svg></div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu" data-bid="mobile-menu" class="d-none sb sib-mobile-menu sb-nm-wH sb-lm">
                <div class="ss-s ss-bg">
                    <div class="sc" style="width:1200px;">
                        <div data-sid="mobile-menu_0" class="sie-mobile-menu_0 se">
                            <div class="se-simple"></div>
                        </div>
                        <a href="https://www.instagram.com/christinagalbato/" target="_blank" class="sie-mobile-menu_1 se"
                            data-sid="mobile-menu_1">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                    <circle cx="256" cy="255.833" r="80"></circle>
                                    <path
                                        d="M177.805 176.887c21.154-21.154 49.28-32.93 79.195-32.93s58.04 11.838 79.195 32.992c13.422 13.42 23.01 29.55 28.232 47.55H448.5v-113c0-26.51-20.49-47-47-47h-288c-26.51 0-49 20.49-49 47v113h85.072c5.222-18 14.81-34.19 28.233-47.614zM416.5 147.7c0 7.07-5.73 12.8-12.8 12.8h-38.4c-7.07 0-12.8-5.73-12.8-12.8v-38.4c0-7.07 5.73-12.8 12.8-12.8h38.4c7.07 0 12.8 5.73 12.8 12.8v38.4zm-80.305 187.58c-21.154 21.153-49.28 32.678-79.195 32.678s-58.04-11.462-79.195-32.616c-21.115-21.115-32.76-49.842-32.803-78.842H64.5v143c0 26.51 22.49 49 49 49h288c26.51 0 47-22.49 47-49v-143h-79.502c-.043 29-11.687 57.664-32.803 78.78z">
                                    </path>
                                </svg></div>
                        </a>
                        <a href="https://www.facebook.com/christinagalbato" target="_blank" class="sie-mobile-menu_2 se"
                            data-sid="mobile-menu_2">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                    <path
                                        d="M288 192v-38.1c0-17.2 3.8-25.9 30.5-25.9H352V64h-55.9c-68.5 0-91.1 31.4-91.1 85.3V192h-45v64h45v192h83V256h56.4l7.6-64h-64z" />
                                </svg></div>
                        </a>
                        <a href="https://www.youtube.com/christinagalbato" target="_blank" class="sie-mobile-menu_3 se"
                            data-sid="mobile-menu_3">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                    <path
                                        d="M508.6 148.8c0-45-33.1-81.2-74-81.2C379.2 65 322.7 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.6-.1 220.2 0 255.8c-.1 35.6 1 71.2 3.4 106.9 0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8 60.8.2 120.3-1 178.6-3.8 40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107 .2-35.6-.9-71.2-3.3-106.9zM207 353.9V157.4l145 98.2-145 98.3z" />
                                </svg></div>
                        </a>
                        <a href="https://www.pinterest.com/christinagalbato/_created/" target="_blank"
                            class="sie-mobile-menu_4 se" data-sid="mobile-menu_4">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 14.86 19.797">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.214 13.09c-.582 2.575-1.407 5.724-2.982 6.707-1.085-3.298 1.36-7.14 1.445-10.41.055-2.167-.582-5.76 2.81-4.71 1.98 1.833-2.587 6.97.618 7.822 1.667.45 2.77-1.022 3.06-1.49 2.57-4.148.63-9.493-4.07-9.106-2.707.23-4.923 2.725-4.854 5.612.042 1.72 1.32 1.686.523 3.99C1.586 11.35.853 10.323.62 9.792-2.575 2.74 7.365-2.794 12.593 1.52c4.34 3.576 2.138 13.502-3.936 12.99-1.127-.102-1.68-.662-2.443-1.42z">
                                    </path>
                                </svg></div>
                        </a>
                        <div class="str-im str-id" data-tran="mobile-menu_5">
                            <a href="/sales" target="_self" class="sie-mobile-menu_5 se" data-sid="mobile-menu_5">
                                <h1 class="se-t sie-mobile-menu_5-text st-m-title st-d-title">NAVIGATE<br></h1>
                            </a>
                        </div>
                        <a href="/home" target="_self" class="sie-mobile-menu_6 se  se-pc" data-sid="mobile-menu_6">
                            <nav class="se-t sie-mobile-menu_6-text st-m-heading st-d-subheading">Home</nav>
                        </a>
 
                        <a href="/sales" target="_self" class="sie-mobile-menu_8 se  se-pc" data-sid="mobile-menu_8">
                            <nav class="se-t sie-mobile-menu_8-text st-m-heading st-d-subheading">About</nav>
                        </a>
                      
                     
                   
                       
                    </div>
                </div>
            </div>
            <div id="mobile-menu-closed" data-bid="mobile-menu-closed" class="d-none sb sib-mobile-menu-closed sb-lm">
                <div class="ss-s ss-bg">
                    <div class="sc" style="width:1200px;">
                        <div data-sid="mobile-menu-closed_0" class="sie-mobile-menu-closed_0 se  se-pc">
                            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                    <path d="M0 144h512v32H0zM0 240h512v32H0zM0 336h512v32H0z" />
                                </svg></div>
                        </div>
                        <div data-sid="mobile-menu-closed_1" class="sie-mobile-menu-closed_1 se">
                            <div style="width:100%;height:100%;" data-img="mobile-menu-closed_1" class="se-img se-gr slzy">
                            </div>
                        </div>
                        <div data-sid="mobile-menu-closed_2" class="sie-mobile-menu-closed_2 se">
                            <div style="width:100%;height:100%;" data-img="mobile-menu-closed_2" class="se-img se-gr slzy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu" class="d-flex justify-content-between align-items-center">
                <a href="/home" target="_self" class="logo">kriti Nayar</a>
                <div class="menu-list">
                    <a href="/sales" target="_self">SALES</a>
                    
                    <!-- <a href="https://learn.christinagalbato.com/users/sign_in" class="btn btn-primary">Student Login</a> -->
                </div>
            </div>