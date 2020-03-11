<!DOCTYPE html>
<html lang="da-DK" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <style type="text/css" media="all">
.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:hover {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
}

.btn-success:focus, .btn-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #1e7e34;
  border-color: #1c7430;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:hover {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
}

.btn-secondary:focus, .btn-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #545b62;
  border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}




            /*!
 * Bootstrap v3.3.2 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
            /*!
 * Generated using the Bootstrap Customizer (http://getbootstrap.com/customize/?id=1734aa9903466b6621ed)
 * Config saved to config.json and https://gist.github.com/1734aa9903466b6621ed
 */
            /*! normalize.css v3.0.2 | MIT License | git.io/normalize */
            html {
                font-family: sans-serif;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%
            }

            body {
                margin: 0
            }

            article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary {
                display: block
            }

            audio,canvas,progress,video {
                display: inline-block;
                vertical-align: baseline
            }

            audio:not([controls]) {
                display: none;
                height: 0
            }

            [hidden],template {
                display: none
            }

            a {
                background-color: transparent
            }

            a:active,a:hover {
                outline: 0
            }

            b,strong {
                font-weight: 700
            }

            dfn {
                font-style: italic
            }

            h1 {
                margin: .67em 0
            }

            mark {
                background: #ff0;
                color: #000
            }

            sub,sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sup {
                top: -.5em
            }

            sub {
                bottom: -.25em
            }

            img {
                border: 0
            }

            svg:not(:root) {
                overflow: hidden
            }

            hr {
                -moz-box-sizing: content-box;
                -webkit-box-sizing: content-box;
                box-sizing: content-box;
                height: 0
            }

            pre {
                overflow: auto
            }

            code,kbd,pre,samp {
                font-size: 1em
            }

            button,input,optgroup,select,textarea {
                color: inherit;
                font: inherit;
                margin: 0
            }

            button {
                overflow: visible
            }

            button,select {
                text-transform: none
            }

            button,html input[type=button],input[type=reset],input[type=submit] {
                -webkit-appearance: button;
                cursor: pointer
            }

            button[disabled],html input[disabled] {
                cursor: default
            }

            button::-moz-focus-inner,input::-moz-focus-inner {
                border: 0;
                padding: 0
            }

            input[type=checkbox],input[type=radio] {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 0
            }

            input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {
                height: auto
            }

            input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration {
                -webkit-appearance: none
            }

            textarea {
                overflow: auto
            }

            optgroup {
                font-weight: 700
            }

            table {
                border-collapse: collapse;
                border-spacing: 0
            }

            td,th {
                padding: 0
            }

            /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
            @media print {
                *,:after,:before {
                    background: 0 0!important;
                    color: #000!important;
                    -webkit-box-shadow: none!important;
                    box-shadow: none!important;
                    text-shadow: none!important
                }

                a,a:visited {
                    text-decoration: underline
                }

                a[href]:after {
                    content: " (" attr(href) ")"
                }

                abbr[title]:after {
                    content: " (" attr(title) ")"
                }

                a[href^="javascript:"]:after,a[href^="#"]:after {
                    content: ""
                }

                blockquote,pre {
                    border: 1px solid #999;
                    page-break-inside: avoid
                }

                thead {
                    display: table-header-group
                }

                img,tr {
                    page-break-inside: avoid
                }

                img {
                    max-width: 100%!important
                }

                h2,h3,p {
                    orphans: 3;
                    widows: 3
                }

                h2,h3 {
                    page-break-after: avoid
                }

                select {
                    background: #fff!important
                }

                .navbar {
                    display: none
                }

                .btn>.caret,.dropup>.btn>.caret {
                    border-top-color: #000!important
                }

                .label {
                    border: 1px solid #000
                }

                .table {
                    border-collapse: collapse!important
                }

                .table td,.table th {
                    background-color: #fff!important
                }

                .table-bordered td,.table-bordered th {
                    border: 1px solid #ddd!important
                }
            }

            *,:after,:before {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }

            html {
                font-size: 10px;
                -webkit-tap-highlight-color: transparent
            }

            body {
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                font-size: 14px;
                line-height: 1.42857143;
                color: #333;
                background-color: #fff
            }

            button,input,select,textarea {
                font-family: inherit;
                font-size: inherit;
                line-height: inherit
            }

            a {
                color: #337ab7;
                text-decoration: none
            }

            a:focus,a:hover {
                color: #23527c;
                text-decoration: underline
            }

            a:focus {
                outline: dotted thin;
                outline: -webkit-focus-ring-color auto 5px;
                outline-offset: -2px
            }

            figure {
                margin: 0
            }

            img {
                vertical-align: middle
            }

            .img-responsive {
                display: block;
                max-width: 100%;
                height: auto
            }

            .img-rounded {
                border-radius: 6px
            }

            .img-thumbnail {
                padding: 4px;
                line-height: 1.42857143;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                -webkit-transition: all .2s ease-in-out;
                -o-transition: all .2s ease-in-out;
                transition: all .2s ease-in-out;
                display: inline-block;
                max-width: 100%;
                height: auto
            }

            .img-circle {
                border-radius: 50%
            }

            hr {
                margin-top: 20px;
                margin-bottom: 20px;
                border: 0;
                border-top: 1px solid #eee
            }

            .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                margin: -1px;
                padding: 0;
                overflow: hidden;
                clip: rect(0,0,0,0);
                border: 0
            }

            .sr-only-focusable:active,.sr-only-focusable:focus {
                position: static;
                width: auto;
                height: auto;
                margin: 0;
                overflow: visible;
                clip: auto
            }

            .h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
                font-family: inherit;
                font-weight: 500;
                line-height: 1.1;
                color: inherit
            }

            .h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small {
                font-weight: 400;
                line-height: 1;
                color: #777
            }

            .h1,.h2,.h3,h1,h2,h3 {
                margin-top: 20px;
                margin-bottom: 10px
            }

            .h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small {
                font-size: 65%
            }

            .h4,.h5,.h6,h4,h5,h6 {
                margin-top: 10px;
                margin-bottom: 10px
            }

            .h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small {
                font-size: 75%
            }

            .h1,h1 {
                font-size: 36px
            }

            .h2,h2 {
                font-size: 30px
            }

            .h3,h3 {
                font-size: 24px
            }

            .h4,h4 {
                font-size: 18px
            }

            .h5,h5 {
                font-size: 14px
            }

            .h6,h6 {
                font-size: 12px
            }

            p {
                margin: 0 0 10px
            }

            .lead {
                margin-bottom: 20px;
                font-size: 16px;
                font-weight: 300;
                line-height: 1.4
            }

            @media (min-width: 768px) {
                .lead {
                    font-size:21px
                }
            }

            .small,small {
                font-size: 85%
            }

            .mark,mark {
                background-color: #fcf8e3;
                padding: .2em
            }

            .text-left {
                text-align: left
            }

            .text-right {
                text-align: right
            }

            .text-center {
                text-align: center
            }

            .text-justify {
                text-align: justify
            }

            .text-nowrap {
                white-space: nowrap
            }

            .text-lowercase {
                text-transform: lowercase
            }

            .text-uppercase {
                text-transform: uppercase
            }

            .text-capitalize {
                text-transform: capitalize
            }

            .text-muted {
                color: #777
            }

            .text-primary {
                color: #337ab7
            }

            a.text-primary:hover {
                color: #286090
            }

            .text-success {
                color: #3c763d
            }

            a.text-success:hover {
                color: #2b542c
            }

            .text-info {
                color: #31708f
            }

            a.text-info:hover {
                color: #245269
            }

            .text-warning {
                color: #8a6d3b
            }

            a.text-warning:hover {
                color: #66512c
            }

            .text-danger {
                color: #a94442
            }

            a.text-danger:hover {
                color: #843534
            }

            .bg-primary {
                color: #fff;
                background-color: #337ab7
            }

            a.bg-primary:hover {
                background-color: #286090
            }

            .bg-success {
                background-color: #dff0d8
            }

            a.bg-success:hover {
                background-color: #c1e2b3
            }

            .bg-info {
                background-color: #d9edf7
            }

            a.bg-info:hover {
                background-color: #afd9ee
            }

            .bg-warning {
                background-color: #fcf8e3
            }

            a.bg-warning:hover {
                background-color: #f7ecb5
            }

            .bg-danger {
                background-color: #f2dede
            }

            a.bg-danger:hover {
                background-color: #e4b9b9
            }

            .page-header {
                padding-bottom: 9px;
                margin: 40px 0 20px;
                border-bottom: 1px solid #eee
            }

            ol,ul {
                margin-top: 0;
                margin-bottom: 10px
            }

            ol ol,ol ul,ul ol,ul ul {
                margin-bottom: 0
            }

            .list-unstyled {
                padding-left: 0;
                list-style: none
            }

            .list-inline {
                padding-left: 0;
                list-style: none;
                margin-left: -5px
            }

            .list-inline>li {
                display: inline-block;
                padding-left: 5px;
                padding-right: 5px
            }

            dl {
                margin-top: 0;
                margin-bottom: 20px
            }

            dd,dt {
                line-height: 1.42857143
            }

            dt {
                font-weight: 700
            }

            dd {
                margin-left: 0
            }

            @media (min-width: 768px) {
                .dl-horizontal dt {
                    float:left;
                    width: 160px;
                    clear: left;
                    text-align: right;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap
                }

                .dl-horizontal dd {
                    margin-left: 180px
                }
            }

            abbr[data-original-title],abbr[title] {
                cursor: help;
                border-bottom: 1px dotted #777
            }

            .initialism {
                font-size: 90%;
                text-transform: uppercase
            }

            blockquote {
                padding: 10px 20px;
                margin: 0 0 20px;
                font-size: 17.5px;
                border-left: 5px solid #eee
            }

            blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child {
                margin-bottom: 0
            }

            blockquote .small,blockquote footer,blockquote small {
                display: block;
                font-size: 80%;
                line-height: 1.42857143;
                color: #777
            }

            blockquote .small:before,blockquote footer:before,blockquote small:before {
                content: '\2014 \00A0'
            }

            .blockquote-reverse,blockquote.pull-right {
                padding-right: 15px;
                padding-left: 0;
                border-right: 5px solid #eee;
                border-left: 0;
                text-align: right
            }

            .blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before {
                content: ''
            }

            .blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after {
                content: '\00A0 \2014'
            }

            address {
                margin-bottom: 20px;
                font-style: normal;
                line-height: 1.42857143
            }

            code,kbd,pre,samp {
                font-family: Menlo,Monaco,Consolas,"Courier New",monospace
            }

            code {
                padding: 2px 4px;
                font-size: 90%;
                color: #c7254e;
                background-color: #f9f2f4;
                border-radius: 4px
            }

            kbd {
                padding: 2px 4px;
                font-size: 90%;
                color: #fff;
                background-color: #333;
                border-radius: 3px;
                -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.25);
                box-shadow: inset 0 -1px 0 rgba(0,0,0,.25)
            }

            kbd kbd {
                padding: 0;
                font-size: 100%;
                font-weight: 700;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            pre {
                display: block;
                padding: 9.5px;
                margin: 0 0 10px;
                font-size: 13px;
                line-height: 1.42857143;
                word-break: break-all;
                word-wrap: break-word;
                color: #333;
                background-color: #f5f5f5;
                border: 1px solid #ccc;
                border-radius: 4px
            }

            pre code {
                padding: 0;
                font-size: inherit;
                color: inherit;
                white-space: pre-wrap;
                background-color: transparent;
                border-radius: 0
            }

            .pre-scrollable {
                max-height: 340px;
                overflow-y: scroll
            }

            .container,.container-fluid {
                margin-right: auto;
                margin-left: auto;
                padding-left: 15px;
                padding-right: 15px
            }

            @media (min-width: 768px) {
                .container {
                    width:750px
                }
            }

            @media (min-width: 992px) {
                .container {
                    width:970px
                }
            }

            @media (min-width: 1200px) {
                .container {
                    width:1170px
                }
            }

            .row {
                margin-left: -15px;
                margin-right: -15px
            }

            .col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9 {
                position: relative;
                min-height: 1px;
                padding-left: 15px;
                padding-right: 15px
            }

            .col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9 {
                float: left
            }

            .col-xs-12 {
                width: 100%
            }

            .col-xs-11 {
                width: 91.66666667%
            }

            .col-xs-10 {
                width: 83.33333333%
            }

            .col-xs-9 {
                width: 75%
            }

            .col-xs-8 {
                width: 66.66666667%
            }

            .col-xs-7 {
                width: 58.33333333%
            }

            .col-xs-6 {
                width: 50%
            }

            .col-xs-5 {
                width: 41.66666667%
            }

            .col-xs-4 {
                width: 33.33333333%
            }

            .col-xs-3 {
                width: 25%
            }

            .col-xs-2 {
                width: 16.66666667%
            }

            .col-xs-1 {
                width: 8.33333333%
            }

            .col-xs-pull-12 {
                right: 100%
            }

            .col-xs-pull-11 {
                right: 91.66666667%
            }

            .col-xs-pull-10 {
                right: 83.33333333%
            }

            .col-xs-pull-9 {
                right: 75%
            }

            .col-xs-pull-8 {
                right: 66.66666667%
            }

            .col-xs-pull-7 {
                right: 58.33333333%
            }

            .col-xs-pull-6 {
                right: 50%
            }

            .col-xs-pull-5 {
                right: 41.66666667%
            }

            .col-xs-pull-4 {
                right: 33.33333333%
            }

            .col-xs-pull-3 {
                right: 25%
            }

            .col-xs-pull-2 {
                right: 16.66666667%
            }

            .col-xs-pull-1 {
                right: 8.33333333%
            }

            .col-xs-pull-0 {
                right: auto
            }

            .col-xs-push-12 {
                left: 100%
            }

            .col-xs-push-11 {
                left: 91.66666667%
            }

            .col-xs-push-10 {
                left: 83.33333333%
            }

            .col-xs-push-9 {
                left: 75%
            }

            .col-xs-push-8 {
                left: 66.66666667%
            }

            .col-xs-push-7 {
                left: 58.33333333%
            }

            .col-xs-push-6 {
                left: 50%
            }

            .col-xs-push-5 {
                left: 41.66666667%
            }

            .col-xs-push-4 {
                left: 33.33333333%
            }

            .col-xs-push-3 {
                left: 25%
            }

            .col-xs-push-2 {
                left: 16.66666667%
            }

            .col-xs-push-1 {
                left: 8.33333333%
            }

            .col-xs-push-0 {
                left: auto
            }

            .col-xs-offset-12 {
                margin-left: 100%
            }

            .col-xs-offset-11 {
                margin-left: 91.66666667%
            }

            .col-xs-offset-10 {
                margin-left: 83.33333333%
            }

            .col-xs-offset-9 {
                margin-left: 75%
            }

            .col-xs-offset-8 {
                margin-left: 66.66666667%
            }

            .col-xs-offset-7 {
                margin-left: 58.33333333%
            }

            .col-xs-offset-6 {
                margin-left: 50%
            }

            .col-xs-offset-5 {
                margin-left: 41.66666667%
            }

            .col-xs-offset-4 {
                margin-left: 33.33333333%
            }

            .col-xs-offset-3 {
                margin-left: 25%
            }

            .col-xs-offset-2 {
                margin-left: 16.66666667%
            }

            .col-xs-offset-1 {
                margin-left: 8.33333333%
            }

            .col-xs-offset-0 {
                margin-left: 0
            }

            @media (min-width: 768px) {
                .col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9 {
                    float:left
                }

                .col-sm-12 {
                    width: 100%
                }

                .col-sm-11 {
                    width: 91.66666667%
                }

                .col-sm-10 {
                    width: 83.33333333%
                }

                .col-sm-9 {
                    width: 75%
                }

                .col-sm-8 {
                    width: 66.66666667%
                }

                .col-sm-7 {
                    width: 58.33333333%
                }

                .col-sm-6 {
                    width: 50%
                }

                .col-sm-5 {
                    width: 41.66666667%
                }

                .col-sm-4 {
                    width: 33.33333333%
                }

                .col-sm-3 {
                    width: 25%
                }

                .col-sm-2 {
                    width: 16.66666667%
                }

                .col-sm-1 {
                    width: 8.33333333%
                }
            }

            @media (min-width: 992px) {
                .col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9 {
                    float:left
                }

                .col-md-12 {
                    width: 100%
                }

                .col-md-11 {
                    width: 91.66666667%
                }

                .col-md-10 {
                    width: 83.33333333%
                }

                .col-md-9 {
                    width: 75%
                }

                .col-md-8 {
                    width: 66.66666667%
                }

                .col-md-7 {
                    width: 58.33333333%
                }

                .col-md-6 {
                    width: 50%
                }

                .col-md-5 {
                    width: 41.66666667%
                }

                .col-md-4 {
                    width: 33.33333333%
                }

                .col-md-3 {
                    width: 25%
                }

                .col-md-2 {
                    width: 16.66666667%
                }

                .col-md-1 {
                    width: 8.33333333%
                }
            }

            @media (min-width: 1200px) {
                .col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9 {
                    float:left
                }

                .col-lg-12 {
                    width: 100%
                }

                .col-lg-11 {
                    width: 91.66666667%
                }

                .col-lg-10 {
                    width: 83.33333333%
                }

                .col-lg-9 {
                    width: 75%
                }

                .col-lg-8 {
                    width: 66.66666667%
                }

                .col-lg-7 {
                    width: 58.33333333%
                }

                .col-lg-6 {
                    width: 50%
                }

                .col-lg-5 {
                    width: 41.66666667%
                }

                .col-lg-4 {
                    width: 33.33333333%
                }

                .col-lg-3 {
                    width: 25%
                }

                .col-lg-2 {
                    width: 16.66666667%
                }

                .col-lg-1 {
                    width: 8.33333333%
                }
            }

            table {
                background-color: transparent
            }

            caption {
                padding-top: 8px;
                padding-bottom: 8px;
                color: #777;
                text-align: left
            }

            th {
                text-align: left
            }

            .table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 20px
            }

            table col[class*=col-] {
                position: static;
                float: none;
                display: table-column
            }

            table td[class*=col-],table th[class*=col-] {
                position: static;
                float: none;
                display: table-cell
            }

            fieldset {
                padding: 0;
                margin: 0;
                border: 0;
                min-width: 0
            }

            legend {
                display: block;
                width: 100%;
                padding: 0;
                margin-bottom: 20px;
                font-size: 21px;
                line-height: inherit;
                color: #333;
                border: 0;
                border-bottom: 1px solid #e5e5e5
            }

            label {
                display: inline-block;
                max-width: 100%;
                margin-bottom: 5px;
                font-weight: 700
            }

            input[type=search] {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }

            input[type=checkbox],input[type=radio] {
                margin: 4px 0 0;
                line-height: normal
            }

            input[type=file] {
                display: block
            }

            input[type=range] {
                display: block;
                width: 100%
            }

            select[multiple],select[size] {
                height: auto
            }

            input[type=file]:focus,input[type=checkbox]:focus,input[type=radio]:focus {
                outline: dotted thin;
                outline: -webkit-focus-ring-color auto 5px;
                outline-offset: -2px
            }

            output {
                display: block;
                padding-top: 7px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555
            }

            input[type=search] {
                -webkit-appearance: none
            }

            @media screen and (-webkit-min-device-pixel-ratio: 0) {
                input[type=date],input[type=time],input[type=datetime-local],input[type=month] {
                    line-height:34px
                }

                .input-group-sm input[type=date],.input-group-sm input[type=time],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm {
                    line-height: 30px
                }

                .input-group-lg input[type=date],.input-group-lg input[type=time],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg {
                    line-height: 46px
                }
            }

            .form-group {
                margin-bottom: 15px
            }

            .checkbox,.radio {
                position: relative;
                display: block;
                margin-top: 10px;
                margin-bottom: 10px
            }

            .checkbox label,.radio label {
                min-height: 20px;
                padding-left: 20px;
                margin-bottom: 0;
                font-weight: 400;
                cursor: pointer
            }

            .checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio] {
                position: absolute;
                margin-left: -20px
            }

            .checkbox+.checkbox,.radio+.radio {
                margin-top: -5px
            }

            .checkbox-inline,.radio-inline {
                display: inline-block;
                padding-left: 20px;
                margin-bottom: 0;
                vertical-align: middle;
                font-weight: 400;
                cursor: pointer
            }

            .checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline {
                margin-top: 0;
                margin-left: 10px
            }

            fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled] {
                cursor: not-allowed
            }

            .btn-lg {
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.3333333;
                border-radius: 6px
            }

            .btn-sm {
                padding: 5px 10px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 3px
            }

            .btn-xs {
                padding: 1px 5px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 3px
            }

            .btn-block {
                display: block;
                width: 100%
            }

            .btn-block+.btn-block {
                margin-top: 5px
            }

            input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block {
                width: 100%
            }

            .clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.row:after,.row:before {
                content: " ";
                display: table
            }

            .clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.row:after {
                clear: both
            }

            .page-list .current_page_item>a {
                font-weight: bold
            }

            .page-list-ext {
                clear: both
            }

            .page-list-ext {
                *zoom:1;}

            .page-list-ext:before,.page-list-ext:after {
                display: table;
                line-height: 0;
                content: ""
            }

            .page-list-ext:after {
                clear: both
            }

            .page-list-ext .page-list-ext-item {
                clear: both;
                margin: 10px 0 30px 0;
                -webkit-column-break-inside: avoid;
                page-break-inside: avoid;
                break-inside: avoid
            }

            .page-list-ext .page-list-ext-image {
                float: left;
                display: inline;
                margin: 5px 15px 15px 0
            }

            .page-list-ext .page-list-ext-title {
                clear: none
            }

            .page-list-cols-2,.page-list-cols-3,.page-list-cols-4,.page-list-cols-5 {
                -webkit-column-gap: 30px;
                -moz-column-gap: 30px;
                column-gap: 30px
            }

            .page-list-cols-2 {
                -webkit-column-count: 2;
                -moz-column-count: 2;
                column-count: 2
            }

            .page-list-cols-3 {
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3
            }

            .page-list-cols-4 {
                -webkit-column-count: 4;
                -moz-column-count: 4;
                column-count: 4
            }

            .page-list-cols-5 {
                -webkit-column-count: 5;
                -moz-column-count: 5;
                column-count: 5
            }

            @media(max-width: 767px) {
                .page-list-cols-2,.page-list-cols-3,.page-list-cols-4,.page-list-cols-5 {
                    -webkit-column-count:1;
                    -moz-column-count: 1;
                    column-count: 1
                }
            }

            .social-menu-widget {
                padding: 0;
                margin: 0 auto;
                display: table;
                text-align: center
            }

            .widget-area .widget_fp_social a,.social-menu-widget a,.social-menu-widget a:hover {
                color: #d65050
            }

            .site-main .comment-navigation,.site-main .posts-navigation,.site-main .post-navigation {
                margin: 0 0 1.5em;
                overflow: hidden
            }

            .comment-navigation .nav-previous,.posts-navigation .nav-previous,.post-navigation .nav-previous {
                float: left;
                width: 50%
            }

            .comment-navigation .nav-next,.posts-navigation .nav-next,.post-navigation .nav-next {
                float: right;
                text-align: right;
                width: 50%
            }

            .posts-navigation .nav-previous {
                padding-left: 15px
            }

            .posts-navigation .nav-next {
                padding-right: 15px
            }

            .post-navigation {
                margin: 30px 0
            }

            .screen-reader-text {
                clip: rect(1px,1px,1px,1px);
                position: absolute !important;
                height: 1px;
                width: 1px;
                overflow: hidden
            }

            .screen-reader-text:hover,.screen-reader-text:active,.screen-reader-text:focus {
                background-color: #f1f1f1;
                border-radius: 3px;
                box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
                clip: auto !important;
                color: #21759b;
                display: block;
                font-size: 14px;
                font-size: .875rem;
                font-weight: bold;
                height: auto;
                left: 5px;
                line-height: normal;
                padding: 15px 23px 14px;
                text-decoration: none;
                top: 5px;
                width: auto;
                z-index: 100000
            }

            .alignleft {
                display: inline;
                float: left;
                margin-right: 1.5em
            }

            .alignright {
                display: inline;
                float: right;
                margin-left: 1.5em
            }

            .aligncenter {
                clear: both;
                display: block;
                margin-left: auto;
                margin-right: auto
            }

            .widget select {
                max-width: 100%
            }

            .widget_search .search-submit {
                display: none
            }

            .sticky {
                display: block
            }

            .byline,.updated:not(.published) {
                display: none
            }

            .single .byline,.group-blog .byline {
                display: inline
            }

            .single .entry-header,.page .entry-header {
                margin-bottom: 30px
            }

            .entry-footer {
                clear: left;
                margin-top: 30px
            }

            .page-links {
                clear: both;
                margin: 0 0 30px
            }

            .page-header {
                margin: 0;
                border: 0
            }

            .page-wrap .content-wrapper {
                padding-top: 15px;
                padding-bottom: 15px;
                background-color: #fff
            }

            .page .page-wrap .content-wrapper,.single .page-wrap .content-wrapper {
                padding: 30px
            }

            .page-template-page_front-page .page-wrap .content-wrapper {
                padding-top: 0;
                padding-bottom: 0;
                background-color: transparent
            }

            .blog .format-aside .entry-title,.archive .format-aside .entry-title {
                display: none
            }

            .comment-content a {
                word-wrap: break-word
            }

            .bypostauthor {
                display: block
            }

            .infinite-scroll .posts-navigation,.infinite-scroll.neverending .site-footer {
                display: none
            }

            .infinity-end.neverending .site-footer {
                display: block
            }

            .page-content .wp-smiley,.entry-content .wp-smiley,.comment-content .wp-smiley {
                border: 0;
                margin-bottom: 0;
                margin-top: 0;
                padding: 0
            }

            embed,iframe,object {
                max-width: 100%
            }

            img {
                max-width: 100%;
                height: auto
            }

            .wp-caption {
                margin-bottom: 1.5em;
                max-width: 100%
            }

            .wp-caption img[class*="wp-image-"] {
                display: block;
                margin: 0 auto
            }

            .wp-caption-text {
                text-align: center
            }

            .wp-caption .wp-caption-text {
                margin: .8075em 0
            }

            .gallery {
                margin-bottom: 1.5em
            }

            .gallery-item {
                display: inline-block;
                text-align: center;
                vertical-align: top;
                width: 100%
            }

            .gallery-columns-2 .gallery-item {
                max-width: 50%
            }

            .gallery-columns-3 .gallery-item {
                max-width: 33.33%
            }

            .gallery-columns-4 .gallery-item {
                max-width: 25%
            }

            .gallery-columns-5 .gallery-item {
                max-width: 20%
            }

            .gallery-columns-6 .gallery-item {
                max-width: 16.66%
            }

            .gallery-columns-7 .gallery-item {
                max-width: 14.28%
            }

            .gallery-columns-8 .gallery-item {
                max-width: 12.5%
            }

            .gallery-columns-9 .gallery-item {
                max-width: 11.11%
            }

            .gallery-caption {
                display: block
            }

            *,*:before,*:after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }

            body {
                font: 14px/1.7 "Source Sans Pro",sans-serif;
                background: #fff;
                color: #767676
            }

            a {
                text-decoration: none;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -ms-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out
            }

            a:hover,a:focus {
                color: #443f3f;
                text-decoration: none;
                outline: 0;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -ms-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out
            }

            .footer-widgets .widget ul,.widget-area .widget ul {
                list-style: none;
                padding: 0
            }

            .widget .children {
                padding-left: 15px
            }

            .img-left {
                margin: 0 33px 0 0 !important;
                float: left
            }

            .img-right {
                margin: 0 0 0 33px !important;
                float: right
            }

            strong {
                font-weight: 600
            }

            h1 {
                font: 52px/1.1 "Raleway",sans-serif
            }

            h2 {
                font: 42px/1.1 "Raleway",sans-serif
            }

            h3 {
                font: 32px/1.1 "Raleway",sans-serif
            }

            h4 {
                font: 25px/1.1 "Raleway",sans-serif
            }

            h5 {
                font: 20px/1.1 "Raleway",sans-serif
            }

            h6 {
                font: 18px/1.1 "Raleway",sans-serif
            }

            h1,h2,h3,h4,h5,h6 {
                color: #443f3f;
                font-weight: 600;
                margin: 10px 0 24px
            }

            .text-white {
                color: #fff !important
            }

            .text-dark {
                color: #443f3f !important
            }

            .orches-animation {
                -ms-filter: "alpha(opacity=0)";
                filter: alpha(opacity=0);
                opacity: 0
            }

            .orches-animation.animated {
                -ms-filter: "alpha(opacity=100)";
                filter: alpha(opacity=100);
                opacity: 1
            }

            .btn {
                background-image: none
            }

            textarea,input[type="text"],input[type="submit"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"],.uneditable-input,.dropdown-menu,.navbar .nav>.active>a,.navbar .nav>.active>a:hover,.navbar .nav>.active>a:focus {
                -webkit-appearance: none;
                text-shadow: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                -o-box-shadow: none;
                box-shadow: none
            }

            table {
                width: 100%
            }

            th,td {
                border: 1px solid #333;
                padding: 5px;
                text-align: center
            }

            .site-title {
                font-size: 32px;
                line-height: 1.2
            }

            .site-title a,.site-title a:hover {
                color: #fff
            }

            .site-logo {
                max-height: 100px
            }

            .site-header {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
                background-color: transparent;
                padding: 20px 0;
                -webkit-transition: all .3s ease-out;
                -moz-transition: all .3s ease-out;
                -ms-transition: all .3s ease-out;
                -o-transition: all .3s ease-out;
                transition: all .3s ease-out
            }

            .admin-bar .site-header,.admin-bar .site-header.float-header {
                top: 32px
            }

            .admin-bar:not(.siteScrolled) .slide-item {
                background-position: 50% 0 !important
            }

            .header-image {
                display: none;
                position: relative;
                height: 300px;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat
            }

            .header-inner {
                display: none
            }

            .site-title {
                margin: 0
            }

            .site-description {
                font-size: 16px;
                margin: 15px 0 0;
                line-height: 1.6;
                color: #efefef
            }

            .site-description:empty {
                margin: 0
            }

            .site-header.fixed {
                position: fixed
            }

            .site-header .col-md-4,.site-header .col-md-8 {
                min-height: 0
            }

            .site-header .logo {
                margin: 40px 0;
                float: left;
                -webkit-transition: all .3s linear;
                -moz-transition: all .3s linear;
                -ms-transition: all .3s linear;
                -o-transition: all .3s linear;
                transition: all .3s linear
            }

            .site-header .logo a {
                display: block;
                height: 100%
            }

            .site-header .logo {
                width: 135px;
                height: 27px
            }

            .site-header.float-header {
                background-color: rgba(0,0,0,0.9);
                padding: 5px
            }

            .site-header.float-header .logo {
                margin: 20px 0
            }

            .btn-menu {
                float: right;
                font-size: 28px;
                font-family: "FontAwesome";
                color: #fff;
                text-align: center;
                width: 28px;
                height: 28px;
                cursor: pointer;
                -webkit-transition: all .3s ease-out;
                -moz-transition: all .3s ease-out;
                -ms-transition: all .3s ease-out;
                -o-transition: all .3s ease-out;
                transition: all .3s ease-out
            }

            .btn-menu:before {
                content: "\f0c9"
            }

            .btn-submenu {
                position: absolute;
                right: 20px;
                top: 0;
                font-family: "FontAwesome";
                font-size: 20px;
                line-height: 45px;
                text-align: center;
                cursor: pointer;
                width: 70px;
                height: 44px
            }

            .btn-submenu:before {
                content: "\f107";
                color: #fff
            }

            .btn-submenu.active:before {
                content: "\f106"
            }

            .btn-menu {
                display: none
            }

            .aside-image {
                padding: 0;
                position: relative
            }

            .aside-image .image-container {
                height: 100%;
                overflow: hidden;
                padding: 0;
                position: absolute;
                left: 0;
                top: 0
            }

            .aside-image .image-holder {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-size: cover !important;
                z-index: 0;
                background-position: 50% 50%
            }

            .aside-image .content-wrap {
                padding: 70px 0 70px 50px
            }

            .aside-image.right .image-container {
                left: auto;
                right: 0
            }

            .aside-image.right .content-wrap {
                padding: 70px 50px 70px 0
            }

            .error-wrap h1 {
                font-size: 35px;
                color: #ddd;
                font-weight: 600;
                margin: 0 0 40px;
                line-height: normal
            }

            .error-wrap h5 {
                margin-top: 60px;
                font-size: 18px;
                font-weight: normal
            }

            .error-wrap .error-search {
                padding: 0 80px
            }

            .error-wrap #search-form {
                height: 50px;
                margin-bottom: 17px;
                position: relative;
                width: 100%
            }

            .error-wrap .search-input {
                margin: 0;
                width: 100%
            }

            .error-wrap #search-submit {
                height: 50px;
                padding: 0;
                position: absolute;
                top: 0;
                right: 0;
                width: 120px;
                border-radius: 0 3px 3px 0;
                background: #443f3f;
                border-color: #443f3f
            }

            .error-wrap #search-submit:hover {
                color: #fff
            }

            #page-slider {
                position: relative;
                height: 250px
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                -ms-filter: "alpha(opacity=70)";
                filter: alpha(opacity=70);
                opacity: .7
            }

            .page-wrap {
                padding: 83px 0 100px;
                clear: both
            }

            .page-template-page_front-page .page-wrap {
                padding: 0
            }

            .entry-page p,.entry-post p {
                margin-bottom: 24px
            }

            .entry-post img {
                margin: 10px 0 20px
            }

            .header-slider,.owl-wrapper {
                direction: ltr
            }

            .header-slider,.owl-carousel {
                -webkit-transform: translate3d(0,0,0)
            }

            .parallax {
                width: 100%;
                background-attachment: fixed;
                background-position: 50% 0
            }

            .header-slider {
                position: relative;
                max-width: 100%
            }

            .slide-text.slides {
                padding-left: 0
            }

            .slides-container .slide-item {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover
            }

            .sliderFix {
                display: block !important
            }

            .text-slider-section {
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 2;
                width: 100%;
                padding-top: 5px;
                -webkit-transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            .text-slider .maintitle,.text-slider .subtitle {
                z-index: 10;
                color: #fff;
                margin: 0;
                letter-spacing: 1px;
                text-shadow: 1px 1px 3px rgba(0,0,0,.3)
            }

            .text-slider .maintitle {
                position: relative;
                display: inline-block;
                font-size: 57px;
                line-height: 67px;
                font-weight: 700;
                padding-bottom: 10px
            }

            .text-slider .maintitle:after {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 0;
                width: 40%;
                height: 1px;
                margin-left: -20%
            }

            .text-slider .subtitle {
                font-size: 30px;
                line-height: 40px;
                padding: 20px 0 50px;
                font-weight: 300
            }

            .text-slider {
                position: relative;
                -webkit-animation-duration: 1s;
                animation-duration: 1s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-animation-name: fadeInRightBig;
                animation-name: fadeInRightBig
            }

            @-webkit-keyframes fadeInRightBig {
                from {
                    right: -1200px
                }

                to {
                    right: 0
                }
            }

            @keyframes fadeInRightBig {
                from {
                    right: -1200px
                }

                to {
                    right: 0
                }
            }

            .slide-inner {
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 2;
                width: 100%;
                min-height: 260px;
                padding-top: 5px;
                -webkit-transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            .header-slider {
                overflow: hidden
            }

            .page-title {
                color: #ccc;
                padding-top: 100px
            }

            .page-title .col-md-6 {
                float: none
            }

            .page-title-inner {
                display: table;
                width: 100%;
                height: 100%;
                position: relative;
                z-index: 1
            }

            .page-title-cap {
                display: table-cell;
                vertical-align: middle
            }

            .page-title .breadcrumbs {
                display: table-cell;
                list-style: none;
                text-align: left;
                vertical-align: middle
            }

            .page-title h1 {
                margin: 0;
                font-size: 18px;
                color: #ccc
            }

            .breadcrumbs ul {
                margin: 0
            }

            .breadcrumbs ul li {
                display: inline
            }

            .breadcrumbs ul li a:hover {
                text-decoration: underline
            }

            .content-area .post-wrap,.contact-form-wrap {
                padding-right: 20px
            }

            .content-area .hentry {
                position: relative;
                padding-top: 50px;
                padding-bottom: 20px
            }

            .content-area .hentry:first-child {
                padding-top: 0
            }

            .content-area .hentry:after {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                width: 30px;
                height: 1px
            }

            .content-area .hentry:first-child:after {
                height: 0
            }

            .hentry .post-content {
                overflow: hidden
            }

            .content-area .entry-thumb {
                text-align: center;
                margin-bottom: 30px
            }

            .hentry .title-post {
                font-size: 20px;
                font-weight: 600;
                line-height: normal;
                padding-bottom: 10px;
                margin: 0
            }

            .hentry .meta-post {
                margin-bottom: 20px
            }

            .hentry .meta-post,.hentry .meta-post a {
                color: #5e5e5e;
                font-size: 13px
            }

            .hentry .meta-post span {
                position: relative;
                padding-left: 20px;
                margin-right: 18px
            }

            .hentry .meta-post .cat-links {
                display: inline-block
            }

            .hentry .meta-post span:before {
                position: absolute;
                left: 0;
                top: 1px;
                font-family: "FontAwesome";
                line-height: normal
            }

            .hentry .meta-post span.posted-on:before {
                content: "\f073"
            }

            .hentry .meta-post span.byline:before {
                content: "\f007"
            }

            .hentry .meta-post span.comments-link:before {
                content: "\f086"
            }

            .hentry .meta-post span.cat-links:before {
                content: "\f114";
                top: 4px
            }

            span.author.vcard {
                padding: 0;
                margin: 0
            }

            .hentry blockquote {
                background-color: #333;
                color: #fff;
                font-size: 16px;
                font-style: italic;
                line-height: 23px;
                margin-bottom: 30px;
                padding: 30px 35px;
                position: relative
            }

            .fullwidth {
                width: 100%
            }

            .error-404 {
                text-align: center
            }

            .error-404 .page-content p {
                margin-bottom: 30px
            }

            .masonry-layout {
                width: 100%;
                padding: 0
            }

            .masonry-layout .hentry {
                width: 360px;
                margin: 15px;
                padding: 0
            }

            .masonry-layout .post-wrap {
                padding: 0
            }

            .masonry-layout .hentry:after {
                width: 0;
                height: 0
            }

            .blog-pagination ul {
                width: 100%;
                text-align: right;
                list-style: none
            }

            .blog-pagination ul li,.blog-pagination ul li a {
                display: inline-block;
                background-color: transparent;
                width: 40px;
                height: 40px;
                line-height: 40px;
                text-align: center
            }

            .blog-pagination ul li {
                margin-left: 3px
            }

            .blog-pagination ul li.active,.blog-pagination ul li:hover a {
                color: #fff
            }

            .widget-area .widget {
                position: relative;
                margin-bottom: 30px;
                padding-top: 50px
            }

            .widget-area .widget:before {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                width: 30px;
                height: 1px
            }

            .widget-area .widget:first-child {
                padding-top: 0
            }

            .widget-area .widget:first-child:before {
                height: 0
            }

            .widget-area .widget-title {
                font-size: 16px;
                line-height: normal;
                color: #443f3f;
                font-weight: 600;
                padding-bottom: 24px;
                margin: 0;
                text-transform: uppercase
            }

            .widget-area .widget ul li {
                padding: 5px 0
            }

            .widget-area .widget ul li:first-child {
                padding-top: 0
            }

            .widget-area .widget ul li:last-child {
                padding-bottom: 0
            }

            .widget-area,.widget-area a {
                color: #767676
            }

            .widget-popular-post .news .thumb {
                width: 65px;
                height: auto;
                margin: 3px 18px 0 0;
                float: left
            }

            .widget-popular-post .news .text {
                min-height: 65px
            }

            .widget-popular-post .news h6 {
                font-size: 13px;
                line-height: 20px;
                font-weight: 500;
                margin: 0 0 4px
            }

            .widget-popular-post .news p,.widget-popular-post .news p a {
                font-size: 13px;
                margin: 0
            }

            .widget-popular-post .news p a:hover {
                text-decoration: underline
            }

            .widget-categories .categories li a {
                position: relative;
                display: block
            }

            .widget-categories .categories li span {
                position: absolute;
                right: 0;
                top: 0
            }

            .widget-tags .tag-list a {
                display: inline-block;
                font-size: 13px;
                color: #767676;
                border: 1px solid #dbdbdb;
                padding: 7px 15px;
                margin: 4px;
                margin-left: 0
            }

            .widget-tags .tag-list a:hover {
                color: #5e5e5e
            }

            .single-post .hentry {
                padding-bottom: 0
            }

            .single-post .author-post {
                position: relative;
                margin-top: 50px;
                background-color: #eee;
                padding: 20px
            }

            .single-post .author-post .author-avatar {
                float: left;
                width: 145px;
                background-color: #f5f5f5;
                padding: 3px
            }

            .single-post .author-post .author-info {
                position: relative;
                padding: 0 20px 0 35px;
                margin-left: 140px;
                min-height: 140px
            }

            .single-post .author-post .name {
                margin: 3px 0 17px 0
            }

            .single-post .author-post .name h6 {
                font-size: 20px;
                font-weight: 600;
                display: inline-block;
                margin: 0
            }

            .single-post .author-post .intro {
                margin: 0
            }

            .comments-area {
                margin-bottom: 60px
            }

            .comments-title {
                margin: 0 0 30px 0;
                font-size: 24px
            }

            .comments-area ol {
                list-style: none
            }

            .comments-area ol {
                padding: 0
            }

            .comments-area .children {
                padding-left: 20px
            }

            .comments-area .fn {
                color: #505050
            }

            .comment-author .avatar {
                position: absolute
            }

            .comment-author .fn,.comment-metadata {
                margin-left: 80px
            }

            .comment-metadata {
                font-size: 12px;
                margin-bottom: 30px
            }

            .comment-body {
                padding: 15px;
                margin-bottom: 20px;
                border-bottom: 1px solid #f3f3f3;
                background-color: #fff
            }

            .reply {
                text-align: right
            }

            .comment-reply-link {
                padding: 5px;
                font-size: 12px
            }

            .comment-meta a {
                color: #c7c7c7
            }

            .comments-area a.url {
                color: #505050;
                text-decoration: underline
            }

            .comment-reply-title {
                font-size: 25px
            }

            .comment-form input {
                width: 100%;
                max-width: 100%
            }

            .form-submit input {
                width: auto
            }

            .portfolio-images {
                margin-bottom: 40px
            }

            .portfolio-info {
                background-color: #f7f7f7;
                border: 1px solid #eee;
                padding: 25px 25px 40px;
                font-family: "Raleway",sans-serif
            }

            .portfolio-info h5 {
                margin: 0 0 15px;
                text-transform: uppercase
            }

            .portfolio-info ul {
                list-style: none;
                font-size: 14px;
                margin-bottom: 10px
            }

            .portfolio-info ul li {
                padding: 10px 0
            }

            .portfolio-info ul li span {
                float: right;
                color: #443f3f
            }

            .portfolio-info .button-group {
                text-align: center
            }

            .portfolio-info .button-group a {
                width: 100%;
                margin-top: 10px
            }

            .footer-widgets {
                padding: 95px 0;
                background-color: #252525
            }

            .footer .copyr {
                color: #a8a8a8;
                margin-bottom: 0
            }

            .footer-widgets .widget-title {
                text-transform: uppercase;
                color: #c5c5c5;
                line-height: normal;
                margin: 5px 0 0
            }

            .widget-info .logo-footer {
                margin-bottom: 36px
            }

            .widget-info p {
                margin-bottom: 24px
            }

            .widget-info .infomation {
                list-style: none;
                margin: 0
            }

            .widget-info .infomation li {
                position: relative;
                padding: 0 0 0 30px;
                margin-bottom: 15px;
                line-height: 24px
            }

            .widget-info .infomation li.address:before,.widget-info .infomation li.phone:before,.widget-info .infomation li.email:before {
                position: absolute;
                left: 0;
                top: 0;
                content: "\f041";
                font-family: "FontAwesome";
                font-size: 16px
            }

            .widget-info .infomation li.phone:before {
                content: "\f095"
            }

            .widget-info .infomation li.email:before {
                content: "\f040"
            }

            .widget-links ul {
                list-style: none;
                margin: 0
            }

            .widget-links ul li {
                padding: 10px 0 7px
            }

            .widget-links ul li:first-child {
                padding-top: 0
            }

            .widget-mail-subscribe p {
                padding-bottom: 10px
            }

            .widget-mail-subscribe .email-sub input {
                width: 205px;
                margin-bottom: 10px
            }

            .site-footer {
                background-color: #1c1c1c;
                line-height: 35px;
                padding: 15px 0
            }

            .site-footer,.site-footer a {
                color: #666
            }

            @-webkit-keyframes bounce {
                0%,20%,50%,80%,100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0)
                }

                40% {
                    -webkit-transform: translateY(-30px);
                    transform: translateY(-30px)
                }

                60% {
                    -webkit-transform: translateY(-15px);
                    transform: translateY(-15px)
                }
            }

            @keyframes bounce {
                0%,20%,50%,80%,100% {
                    -webkit-transform: translateY(0);
                    -ms-transform: translateY(0);
                    transform: translateY(0)
                }

                40% {
                    -webkit-transform: translateY(-30px);
                    -ms-transform: translateY(-30px);
                    transform: translateY(-30px)
                }

                60% {
                    -webkit-transform: translateY(-15px);
                    -ms-transform: translateY(-15px);
                    transform: translateY(-15px)
                }
            }

            .go-top {
                position: fixed !important;
                right: 20px;
                bottom: -45px;
                color: #fff;
                display: block;
                font-size: 22px;
                line-height: 35px;
                text-align: center;
                width: 40px;
                height: 40px;
                visibility: hidden;
                -ms-filter: "alpha(opacity=0)";
                filter: alpha(opacity=0);
                opacity: 0;
                z-index: 9999;
                cursor: pointer;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                -o-border-radius: 2px;
                border-radius: 2px;
                -webkit-transition: all .5s;
                -moz-transition: all .5s;
                -ms-transition: all .5s;
                -o-transition: all .5s;
                transition: all .5s
            }

            .go-top:hover {
                background-color: #fff
            }

            .go-top.show {
                -ms-filter: "alpha(opacity=100)";
                filter: alpha(opacity=100);
                opacity: 1;
                visibility: visible;
                bottom: 11px
            }

            .panel-grid-cell .widget-title {
                text-align: center;
                margin-bottom: 50px;
                position: relative;
                font-weight: 600;
                line-height: normal;
                text-transform: uppercase;
                padding-bottom: 10px
            }

            .panel-grid-cell .widget-title:after {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 0;
                width: 50px;
                height: 1px;
                margin-left: -25px;
                background-color: #d65050
            }

            .panel-grid {
                max-width: 1170px;
                margin-left: auto !important;
                margin-right: auto !important
            }

            .panel-row-style[data-hasbg="hasbg"] {
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                position: relative;
                z-index: 11;
                overflow: hidden
            }

            .panel-grid .overlay {
                z-index: -1
            }

            .no-col-padding .panel-grid-cell {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .sow-carousel-thumbnail .overlay {
                position: static;
                height: 100% !important
            }

            .roll-counter {
                text-align: center
            }

            .roll-counter i {
                font-size: 30px
            }

            .roll-counter .name-count,.roll-counter .numb-count {
                font-family: "Raleway",sans-serif
            }

            .roll-counter .name-count {
                font-size: 14px;
                font-weight: 600;
                padding: 15px 0
            }

            .roll-counter .numb-count {
                font-size: 44px;
                padding: 0;
                font-weight: 600
            }

            .roll-client {
                text-align: center
            }

            .roll-client .client-item {
                float: none;
                display: inline-block;
                width: 19%;
                text-align: center;
                margin: 15px 0
            }

            .roll-client .client-item img {
                max-width: 150px
            }

            .roll-spacer {
                display: block;
                clear: both;
                width: 100%;
                height: 47px;
                overflow: hidden
            }

            .roll-spacer.small {
                height: 27px
            }

            .roll-spacer.large {
                height: 60px
            }

            .service {
                margin-bottom: 30px
            }

            .widget_sydney_services_type_b .service {
                margin-bottom: 20px
            }

            .widget_sydney_services_type_b .service-thumb {
                float: left;
                max-width: 120px;
                margin-right: 30px;
                margin-top: 7px
            }

            .service.col-md-4:nth-of-type(3n+1) {
                clear: left
            }

            .service.col-md-6:nth-of-type(2n+1) {
                clear: left
            }

            .roll-icon-box {
                text-align: center
            }

            .roll-icon-box .service-thumb {
                margin: 0 auto 20px
            }

            .roll-icon-box .icon {
                text-align: center;
                width: 70px;
                height: 70px;
                line-height: 75px;
                margin: 0 auto 20px;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -o-border-radius: 50%;
                border-radius: 50%
            }

            .roll-icon-box.left {
                text-align: left
            }

            .roll-icon-box.left .icon {
                float: left;
                margin-top: 7px;
                margin-right: 30px
            }

            .roll-icon-box .icon i {
                font-size: 26px
            }

            .roll-icon-box .content {
                overflow: hidden
            }

            .roll-icon-box .content h3 {
                font-size: 16px;
                font-weight: 500;
                line-height: normal;
                margin: 7px 0 10px
            }

            .roll-icon-box .content h3,.roll-icon-box .content h3 a {
                color: #443f3f
            }

            .roll-icon-box .content p {
                margin: 0
            }

            .sydney_contact_info_widget span {
                color: #d65050;
                margin-right: 15px
            }

            .sydney_contact_info_widget div {
                margin-bottom: 15px
            }

            .roll-icon-list {
                padding-top: 15px
            }

            .roll-icon-list .icon {
                text-align: center;
                width: 70px;
                height: 70px;
                line-height: 75px;
                float: left;
                margin-right: 30px;
                margin-top: 7px;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -o-border-radius: 50%;
                border-radius: 50%
            }

            .roll-icon-list .icon i {
                font-size: 26px
            }

            .roll-icon-list .list-item {
                margin-bottom: 30px
            }

            .roll-icon-list .content {
                overflow: hidden
            }

            .roll-icon-list .content h3 {
                font-size: 16px;
                font-weight: 500;
                line-height: normal;
                margin: 7px 0 10px
            }

            .roll-icon-list .content h3 a {
                color: #443f3f
            }

            .roll-icon-list .content p {
                margin-bottom: 0
            }

            .roll-list {
                list-style: none;
                margin: 0 0 30px 10px
            }

            .roll-list li {
                line-height: 32px;
                position: relative;
                padding-left: 40px
            }

            .roll-list li:before {
                content: "\f006";
                font-family: "FontAwesome";
                font-size: 15px;
                position: absolute;
                left: 0;
                top: 0
            }

            .roll-button {
                position: relative;
                display: inline-block;
                font-family: "Raleway",sans-serif;
                font-size: 13px;
                line-height: 24px;
                font-weight: 700;
                padding: 12px 35px;
                color: #fff;
                text-transform: uppercase;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                -o-border-radius: 3px;
                border-radius: 3px;
                -webkit-transition: all .3s;
                -moz-transition: all .3s;
                -ms-transition: all .3s;
                -o-transition: all .3s;
                transition: all .3s
            }

            .roll-button:hover {
                background-color: transparent
            }

            .roll-button.border {
                background-color: transparent;
                text-transform: uppercase
            }

            .roll-button.border:hover {
                color: #fff
            }

            .roll-button.border.text-white {
                color: #fff
            }

            .roll-button.light {
                background-color: #fff;
                border: 1px solid #fff;
                color: #443f3f
            }

            .roll-button.light:hover {
                color: #fff
            }

            .roll-button.light.border {
                border: 1px solid #fff;
                background-color: transparent;
                color: #fff
            }

            .roll-button.light.border:hover {
                border: 1px solid #443f3f;
                background-color: #443f3f;
                color: #fff
            }

            .roll-button.dark {
                background-color: #443f3f;
                border: 1px solid #443f3f
            }

            .roll-button.dark:hover {
                border: 1px solid #443f3f;
                background-color: transparent;
                color: #443f3f
            }

            .roll-button.dark.border {
                border: 1px solid #443f3f;
                background-color: transparent;
                color: #443f3f
            }

            .roll-button.dark.border:hover {
                border: 1px solid #443f3f;
                background-color: #443f3f;
                color: #fff
            }

            .more-button {
                display: table;
                margin: 30px auto 0;
                clear: both
            }

            .roll-button-group {
                text-align: center
            }

            .roll-button-group .roll-button {
                margin-left: 8px
            }

            .roll-button-group .roll-button:first-child {
                margin-left: 0
            }

            .blog-post {
                margin-bottom: 30px
            }

            .blog-post .entry-title {
                margin: 15px 0;
                font-size: 16px
            }

            .project-filter {
                margin: 20px 0 50px 0;
                text-align: center;
                padding-left: 0
            }

            .project-filter li {
                display: inline-block;
                position: relative;
                text-align: center;
                margin-left: -4px;
                background-color: #f5f5f5;
                -webkit-transition: background .3s;
                -moz-transition: background .3s;
                -ms-transition: background .3s;
                -o-transition: background .3s;
                transition: background .3s
            }

            .widget-area .widget .project-filter li {
                padding: 0
            }

            .project-filter li a {
                color: #767676;
                display: block;
                font-family: "Raleway",sans-serif;
                font-size: 13px;
                font-weight: 600;
                outline: 0;
                padding: 10px
            }

            .project-filter li a.active,.project-filter li a:hover,#secondary .project-filter li a.active,#secondary .project-filter li a:hover {
                color: #fff
            }

            .roll-project {
                width: 100%;
                padding-bottom: 50px;
                margin: 0
            }

            .roll-project .project-item {
                margin: 0 0 30px
            }

            .roll-project.fullwidth .project-item {
                float: left
            }

            .roll-project.fullwidth .project-item {
                width: 20%;
                margin: 0
            }

            .roll-project .project-item .item-wrap {
                position: relative
            }

            .roll-project .project-item .pop-overlay {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                padding: 10px;
                z-index: 10;
                -ms-filter: "alpha(opacity=0)";
                filter: alpha(opacity=0);
                opacity: 0;
                -webkit-transition: all 1s;
                -moz-transition: all 1s;
                -ms-transition: all 1s;
                -o-transition: all 1s;
                transition: all 1s
            }

            .roll-project .project-item .project-pop-wrap {
                z-index: 20;
                width: 100%;
                height: 100%;
                position: absolute
            }

            .roll-project .project-item .project-pop {
                color: #fff;
                text-align: center;
                z-index: 1;
                width: 100%;
                height: 100%;
                cursor: pointer;
                -ms-filter: "alpha(opacity=0)";
                filter: alpha(opacity=0);
                opacity: 0;
                position: absolute;
                -webkit-transition: all .3s;
                -moz-transition: all .3s;
                -ms-transition: all .3s;
                -o-transition: all .3s;
                transition: all .3s
            }

            .roll-project .project-item .project-pop a {
                color: #fff
            }

            .roll-project .project-item:hover .project-pop {
                opacity: .5
            }

            .roll-project .project-item .project-pop h3 {
                font-size: 16px;
                font-weight: 700;
                line-height: 26px;
                position: absolute;
                left: 0;
                bottom: 50%;
                width: 100%;
                margin-bottom: -4px
            }

            .roll-project .project-item .project-cat {
                width: 100%;
                position: absolute;
                left: 0;
                top: 50%;
                padding-top: 20px;
                margin: 0
            }

            .roll-project .project-item .project-cat li {
                display: inline-block
            }

            .roll-project .project-item .project-cat li a {
                position: relative;
                font-style: italic;
                padding: 0 5px
            }

            .roll-project .project-item .project-cat li a:before {
                position: absolute;
                content: "/";
                left: -3px;
                top: -1px
            }

            .roll-project .project-item .project-cat li:first-child a:before {
                content: ""
            }

            .roll-project .project-item:hover .project-title-wrap,.roll-project .project-item:hover>.item-wrap .project-pop {
                -ms-filter: "alpha(opacity=100)";
                filter: alpha(opacity=100);
                opacity: 1;
                -webkit-animation: pop-scale .5s 1 cubic-bezier(0.15,.85,.35,1.25);
                -moz-animation: pop-scale .5s 1 cubic-bezier(0.15,.85,.35,1.25);
                animation: pop-scale .5s 1 cubic-bezier(0.15,.85,.35,1.25)
            }

            .roll-project .project-item:hover>.item-wrap .pop-overlay {
                -ms-filter: "alpha(opacity=100)";
                filter: alpha(opacity=100);
                opacity: 1
            }

            .project-title-wrap {
                position: absolute;
                width: 100%;
                height: 100%;
                opacity: 0;
                z-index: 2
            }

            .roll-project .project-item:hover>.item-wrap .project-title-wrap {
                border: 2px solid yellow
            }

            .roll-project .project-title {
                display: table;
                width: 100%;
                height: 100%;
                text-align: center;
                color: #fff
            }

            .roll-project .project-title span {
                display: table-cell;
                vertical-align: middle;
                padding-left: 10px;
                padding-right: 10px
            }

            .roll-testimonials {
                max-width: 750px;
                margin: 0 auto 30px;
                text-align: center
            }

            .roll-testimonials .avatar {
                width: 100px;
                margin: 7px auto 26px;
                border: 2px solid #fff
            }

            .roll-testimonials .avatar,.roll-testimonials .avatar img {
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -o-border-radius: 50%;
                border-radius: 50%
            }

            .roll-testimonials .whisper {
                font-size: 18px;
                font-style: italic;
                line-height: 26px;
                padding: 0 0 20px;
                margin: 0;
                border: 0
            }

            .hentry .roll-testimonials blockquote {
                background-color: transparent;
                color: inherit
            }

            .roll-testimonials .name {
                font-family: "Raleway",sans-serif;
                font-size: 18px;
                font-weight: 500
            }

            .roll-testimonials .name span {
                font-size: 13px;
                display: block;
                color: #767676
            }

            .roll-testimonials .owl-controls {
                margin-top: 40px
            }

            .hentry .roll-testimonials blockquote {
                background: transparent
            }

            .owl-carousel .owl-wrapper:after {
                content: ".";
                display: block;
                clear: both;
                visibility: hidden;
                line-height: 0;
                height: 0
            }

            .owl-carousel {
                display: none;
                position: relative;
                -ms-touch-action: pan-y;
                -webkit-transition: all .3s !important;
                transition: all .3s !important
            }

            .owl-carousel .owl-wrapper {
                display: none;
                position: relative;
                -webkit-transform: translate3d(0px,0px,0px)
            }

            .owl-carousel .owl-wrapper-outer {
                overflow: hidden;
                position: relative;
                width: 100%
            }

            .owl-carousel .owl-wrapper-outer.autoHeight {
                -webkit-transition: height 500ms ease-in-out;
                -moz-transition: height 500ms ease-in-out;
                -ms-transition: height 500ms ease-in-out;
                -o-transition: height 500ms ease-in-out;
                transition: height 500ms ease-in-out
            }

            .owl-carousel .owl-item {
                float: left
            }

            .owl-controls .owl-page,.owl-controls .owl-buttons div {
                cursor: pointer
            }

            .owl-controls {
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-tap-highlight-color: rgba(0,0,0,0)
            }

            .owl-carousel .owl-wrapper,.owl-carousel .owl-item {
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -ms-backface-visibility: hidden;
                -webkit-transform: translate3d(0,0,0);
                -moz-transform: translate3d(0,0,0);
                -ms-transform: translate3d(0,0,0)
            }

            .owl-theme .owl-controls {
                text-align: center;
                margin-top: 45px
            }

            .owl-theme .owl-controls .owl-page {
                display: inline-block;
                zoom:1}

            .owl-theme .owl-controls .owl-page span {
                display: block;
                width: 9px;
                height: 9px;
                margin: 4px;
                background-color: transparent;
                -ms-filter: "alpha(opacity=100)";
                filter: alpha(opacity=100);
                opacity: 1;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -o-border-radius: 50%;
                border-radius: 50%;
                -webkit-transition: background .3s;
                -moz-transition: background .3s;
                -ms-transition: background .3s;
                -o-transition: background .3s;
                transition: background .3s
            }

            .roll-socials li {
                display: inline-block;
                text-align: center;
                margin: 2px 8px 8px 0
            }

            .roll-socials li:last-child {
                margin-right: 0
            }

            .roll-socials li a {
                display: inline-block;
                width: 40px;
                height: 40px;
                line-height: 40px;
                background-color: transparent;
                font-size: 16px;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -o-border-radius: 50%;
                border-radius: 50%
            }

            .roll-socials li a:hover {
                color: #fff
            }

            .roll-infomation {
                margin-bottom: 50px;
                list-style: none
            }

            .roll-infomation li {
                position: relative;
                padding-left: 30px;
                margin-bottom: 15px;
                line-height: 24px
            }

            .roll-infomation li.time span {
                color: #d91d1d;
                font-weight: 700
            }

            .roll-infomation li.address:before,.roll-infomation li.phone:before,.roll-infomation li.email:before {
                position: absolute;
                left: 0;
                top: 4px;
                content: "\f041";
                font-family: "FontAwesome";
                font-size: 20px
            }

            .roll-infomation li.phone:before {
                content: "\f095"
            }

            .roll-infomation li.email:before {
                content: "\f040"
            }

            .roll-progress {
                position: relative;
                margin-bottom: 20px
            }

            .roll-progress .name {
                position: absolute;
                left: 0;
                top: 0
            }

            .roll-progress .name,.roll-progress .perc {
                font-weight: 400
            }

            .roll-progress .progress-animate {
                height: 10px;
                width: 0;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                -o-border-radius: 2px;
                border-radius: 2px
            }

            .roll-progress .progress-bar {
                background: #f3f3f3;
                width: 100%;
                margin-top: 10px;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                -o-border-radius: 2px;
                border-radius: 2px
            }

            .roll-progress .perc {
                width: 0;
                text-align: right;
                -ms-filter: "alpha(opacity=0)";
                filter: alpha(opacity=0);
                opacity: 0;
                -webkit-transition: opacity 1s ease-in-out;
                -moz-transition: opacity 1s ease-in-out;
                -ms-transition: opacity 1s ease-in-out;
                -o-transition: opacity 1s ease-in-out;
                transition: opacity 1s ease-in-out
            }

            .roll-progress .perc.show {
                -ms-filter: "alpha(opacity=100)";
                filter: alpha(opacity=100);
                opacity: 1
            }

            .roll-servicebox .service-content h3 {
                font-size: 16px;
                font-weight: 500;
                margin: 10px 0 10px
            }

            .roll-tabs {
                margin-bottom: 20px
            }

            .roll-tabs .menu-tab {
                overflow: hidden;
                margin: 0;
                list-style: none
            }

            .roll-tabs .menu-tab li {
                position: relative;
                bottom: -1px;
                float: left;
                margin-right: 2px
            }

            .roll-tabs .menu-tab li a {
                font-family: "Raleway",sans-serif;
                font-size: 14px;
                font-weight: 500;
                display: block;
                color: #2d3340;
                padding: 12px 25px 10px
            }

            .roll-tabs .menu-tab li a:hover {
                background-color: #f7f7f7;
                text-decoration: none
            }

            .roll-tabs .menu-tab li.active a {
                background-color: #fff;
                border: 1px solid #dbdbdb;
                transition: none
            }

            .roll-tabs .content-tab {
                margin-top: 50px;
                border: 1px solid #dbdbdb;
                padding: 25px 20px 10px 25px;
                margin-top: -1px;
                background-color: #fff
            }

            .roll-tabs .content-tab p {
                margin-bottom: 20px
            }

            .roll-promobox {
                text-align: center;
                padding: 20px 0
            }

            .roll-promobox .promo-controls {
                margin-top: 25px
            }

            .roll-promobox .title {
                font-size: 18px;
                margin-bottom: 10px;
                color: #8e8e8e;
                font-weight: 500
            }

            .roll-promobox .promo-content p {
                margin-bottom: 40px;
                font-size: 16px
            }

            .roll-promobox.aside-style {
                text-align: left
            }

            .roll-promobox.aside-style .promo-content p {
                padding-bottom: 15px
            }

            .roll-promobox.aside-style .promo-wrap {
                display: table;
                overflow: hidden;
                width: 100%
            }

            .roll-promobox.aside-style .promo-content {
                display: table-cell;
                vertical-align: middle;
                width: 70%
            }

            .roll-promobox.aside-style .promo-content p {
                margin: 0 0 5px
            }

            .roll-promobox.aside-style .promo-controls {
                display: table-cell;
                margin: 0;
                text-align: center;
                vertical-align: middle;
                white-space: nowrap;
                width: 30%
            }

            .roll-team.carousel .team-item {
                padding: 0 25px
            }

            .post-type-archive-employees .team-item {
                margin-bottom: 30px
            }

            .roll-team .team-inner {
                padding: 4px;
                background-color: #fff;
                position: relative;
                text-align: center
            }

            .roll-team .team-item .team-pop .name {
                font-family: "Raleway",sans-serif;
                font-size: 16px;
                font-weight: 600;
                color: #fff;
                padding: 10px 0
            }

            .roll-team .team-item .team-pop .pos {
                font-style: italic
            }

            .roll-team .team-item .team-pop .team-info {
                top: 30%;
                position: relative;
                width: 100%
            }

            .roll-team .team-item .pop-overlay {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                padding: 10px;
                z-index: 10;
                -ms-filter: "alpha(opacity=0)";
                filter: alpha(opacity=0);
                opacity: 0;
                -webkit-transition: all 1s;
                -moz-transition: all 1s;
                -ms-transition: all 1s;
                -o-transition: all 1s;
                transition: all 1s
            }

            .roll-team .team-item .team-social {
                text-align: center;
                padding: 17px 0 0;
                margin: 0
            }

            .roll-team .team-item .team-social li {
                display: inline-block
            }

            .roll-team .team-social li a {
                font-size: 16px;
                color: #fff;
                display: block;
                margin-left: 5px;
                height: 30px;
                width: 30px;
                line-height: 28px;
                border: 1px solid #fff;
                background-color: transparent;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -o-border-radius: 50%;
                border-radius: 50%;
                -webkit-transition: all .3s;
                -moz-transition: all .3s;
                -ms-transition: all .3s;
                -o-transition: all .3s;
                transition: all .3s
            }

            .roll-team .team-item .team-social li:first-child a {
                margin-left: 0
            }

            .roll-team .team-item .team-social li:hover a {
                background-color: #fff
            }

            .archive .team-social li a {
                color: #d65050;
                border: 1px solid #d65050
            }

            .roll-team .team-item .team-pop {
                color: #fff;
                z-index: 20;
                width: 100%;
                height: 100%;
                padding: 0 10px;
                cursor: pointer;
                -ms-filter: "alpha(opacity=0)";
                filter: alpha(opacity=0);
                opacity: 0;
                -webkit-transition: all .3s;
                -moz-transition: all .3s;
                -ms-transition: all .3s;
                -o-transition: all .3s;
                transition: all .3s
            }

            .roll-team .team-item:hover>.team-inner .team-pop {
                -ms-filter: "alpha(opacity=100)";
                filter: alpha(opacity=100);
                opacity: 1;
                -webkit-animation: pop-scale .5s 1 cubic-bezier(0.15,.85,.35,1.2);
                -moz-animation: pop-scale .5s 1 cubic-bezier(0.15,.85,.35,1.2);
                animation: pop-scale .5s 1 cubic-bezier(0.15,.85,.35,1.2)
            }

            .roll-team .team-item:hover>.team-inner .pop-overlay {
                -ms-filter: "alpha(opacity=100)";
                filter: alpha(opacity=100);
                opacity: 1
            }

            .roll-team .team-content {
                text-align: center
            }

            .roll-team .team-content .name {
                font-family: "Raleway",sans-serif;
                font-size: 16px;
                font-weight: 600;
                padding: 12px 0 2px
            }

            .roll-team .team-content .pos {
                padding-bottom: 12px;
                color: #443f3f
            }

            .archive .team-item:nth-of-type(3n+1) {
                clear: left
            }

            .entry-post .roll-team .team-inner .avatar img {
                margin: 0
            }

            a {
                color: #d65050
            }

            h1 a,h2 a,h3 a,h4 a,h5 a,h6 a {
                color: #d65050
            }

            .text-color {
                color: #d65050
            }

            .text-slider .maintitle:after {
                background-color: #d65050
            }

            .content-area .hentry:after {
                background-color: #d65050
            }

            .hentry .meta-post a:hover {
                color: #d65050
            }

            .hentry blockquote {
                border-left: 3px solid #d65050
            }

            .blog-pagination ul li {
                border: 1px solid #d65050
            }

            .blog-pagination ul li.active,.blog-pagination ul li:hover a {
                background-color: #d65050
            }

            .sidebar .widget:before {
                background-color: #d65050
            }

            .widget-tags .tag-list a:hover {
                border: 1px solid #d65050
            }

            .comment .comment-detail {
                border: 1px solid #d65050
            }

            .bottom .socials li:hover a,.go-top {
                background-color: #d65050
            }

            .go-top:hover {
                color: #d65050
            }

            .switcher-container .switcher-icon a:focus {
                color: #d65050
            }

            .owl-theme .owl-controls .owl-page span {
                border: 2px solid #d65050
            }

            .owl-theme .owl-controls .owl-page.active span,.owl-theme .owl-controls.clickable .owl-page:hover span {
                background-color: #d65050
            }

            .roll-icon-box .icon {
                border: 1px solid #d65050
            }

            .roll-icon-box .icon i,.roll-icon-box .content h3 a:hover {
                color: #d65050
            }

            .roll-icon-box.white .icon {
                background-color: #d65050
            }

            .roll-icon-box.white .content h3 a {
                color: #d65050
            }

            .roll-icon-list .icon {
                border: 1px solid #d65050
            }

            .roll-icon-list .icon i,.roll-icon-list .content h3 a:hover {
                color: #d65050
            }

            .roll-button {
                background-color: #d65050;
                border: 1px solid #d65050
            }

            .roll-button:hover {
                color: #d65050
            }

            .roll-button.border {
                color: #d65050;
                border: 1px solid #d65050
            }

            .roll-button.border:hover {
                background-color: #d65050
            }

            .roll-button.light:hover {
                border: 1px solid #d65050;
                background-color: #d65050
            }

            .project-filter li a.active,.project-filter li a:hover {
                background-color: #d65050
            }

            .roll-testimonials .name {
                font-family: "Raleway",sans-serif;
                font-size: 18px;
                font-weight: 500;
                color: #d65050
            }

            .roll-project .project-item .project-pop {
                background-color: #d65050
            }

            .roll-socials li a {
                border: 1px solid #d65050
            }

            .roll-socials li a:hover {
                background-color: #d65050;
                border: 1px solid #d65050
            }

            .roll-infomation li.address:before,.roll-infomation li.phone:before,.roll-infomation li.email:before {
                color: #d65050
            }

            .roll-progress .progress-animate {
                background-color: #d65050
            }

            .roll-team .team-item .team-pop .team-social li:hover a {
                color: #d65050
            }

            .roll-team .team-item .team-pop {
                background-color: #d65050
            }

            .roll-team .team-content .name {
                color: #d65050
            }

            .woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button {
                background-color: #d65050
            }

            .cart-contents {
                position: relative
            }

            .cart-contents .fa,.header-account .fa {
                font-size: 18px
            }

            .cart-amount {
                background-color: #d65050;
                font-size: 12px;
                display: block;
                width: 18px;
                height: 18px;
                line-height: 18px;
                border-radius: 50%;
                top: -10px;
                position: absolute;
                color: #fff;
                right: -18px;
                text-align: center
            }

            .woocommerce ul.products li.product .woocommerce-LoopProduct-link p {
                color: #767676
            }

            ol.flex-control-nav.flex-control-thumbs {
                list-style-type: none;
                padding-left: 0;
                margin: 0 -3px
            }

            ol.flex-control-nav.flex-control-thumbs li img {
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                -o-user-select: none;
                user-select: none;
                cursor: pointer
            }

            ol.flex-control-nav.flex-control-thumbs li {
                width: 33.333%;
                display: inline-block;
                padding: 3px;
                vertical-align: middle
            }

            ol.flex-control-nav.flex-control-thumbs li img:not(.flex-active) {
                opacity: .6
            }

            .woocommerce ul#shipping_method {
                display: table;
                margin: 0 auto;
                text-align: left
            }

            .woocommerce ul#shipping_method li {
                padding: 0
            }

            .wp-custom-header video {
                display: block;
                height: auto;
                max-width: 100%;
                width: 100%
            }

            .wp-custom-header iframe {
                vertical-align: top
            }

            .wp-custom-header {
                position: relative
            }

            .wp-custom-header .wp-custom-header-video-button {
                position: absolute;
                bottom: 10%;
                left: -webkit-calc(50% - 25px);
                left: calc(50% - 25px);
                height: 50px;
                width: 50px;
                padding: 0;
                border: 0;
                border-radius: 50%;
                background-color: rgba(51,51,51,.7);
                -webkit-transition: background-color .4s;
                transition: background-color .4s
            }

            .wp-custom-header .wp-custom-header-video-button:hover {
                color: #fff;
                background-color: #333
            }

            .wp-custom-header .wp-custom-header-video-button:focus {
                outline: 0
            }

            .sydney-video .video-text,.sydney-video .toggle-popup,.sydney-video .close-popup {
                display: none
            }

            .sydney-video.vid-lightbox .video-text {
                display: block;
                margin-bottom: 30px
            }

            .sydney-video.vid-lightbox .video-text:empty {
                margin-bottom: 0
            }

            .sydney-video.vid-lightbox .popup-show .close-popup {
                display: block;
                position: absolute;
                top: -30px;
                right: -30px;
                z-index: 12;
                font-size: 20px;
                cursor: pointer;
                color: #fff
            }

            .sydney-video.vid-lightbox .sydney-video-inner {
                max-width: 720px;
                margin: 0 auto;
                position: relative;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            .sydney-video.vid-lightbox .video-overlay {
                position: fixed;
                top: 0;
                left: -9999em;
                height: 100%;
                width: 100%;
                z-index: 9998;
                background-color: rgba(0,0,0,.3)
            }

            .sydney-video.vid-lightbox .popup-show {
                left: 0
            }

            .sydney-video.vid-lightbox {
                text-align: center
            }

            .sydney-video.vid-lightbox .toggle-popup {
                width: 60px;
                height: 60px;
                display: table;
                margin: 0 auto;
                background-color: #fff;
                box-shadow: 0 0 12px 0 rgba(83,85,93,.3);
                border-radius: 50%;
                line-height: 60px;
                font-size: 28px;
                color: #46444c;
                transition: all .4s
            }

            .sydney-video.vid-lightbox .toggle-popup:hover {
                background-color: #46444c;
                color: #fff
            }

            .page-template-page_front-page.elementor-page .page-wrap .content-wrapper,.page-template-page_front-page.fl-builder .page-wrap .content-wrapper {
                width: 100%;
                padding: 0 15px
            }

            .fl-widget .widgettitle,div[class*="elementor-widget-wp-widget-sydney"] h5 {
                text-align: center;
                margin-bottom: 50px;
                position: relative;
                font-weight: 600;
                line-height: normal;
                text-transform: uppercase;
                padding-bottom: 10px;
                font-size: 32px
            }

            @media only screen and (min-width: 1930px) {
                .parallax {
                    background-size:cover
                }
            }

            @media only screen and (max-width: 1199px) {
                .roll-icon-list .list-item {
                    margin-bottom:18px
                }

                .roll-project.fullwidth .project-item {
                    width: 25%
                }

                .masonry-layout .hentry {
                    width: 455px
                }
            }

            @media only screen and (max-width: 991px) {
                .parallax {
                    background-size:cover;
                    background-attachment: scroll;
                    background-position: top center !important
                }

                .roll-counter .numb-count {
                    font-size: 24px
                }

                .masonry-layout .hentry {
                    width: 345px
                }

                .header-wrap .col-md-8 {
                    padding: 0
                }

                .last {
                    margin-bottom: 0 !important
                }

                .margin-bottom-device {
                    margin-bottom: 50px
                }

                .margin-top-device {
                    margin-top: 50px
                }

                .content-area .post-wrap,.contact-form-wrap {
                    padding-right: 0
                }

                .contact-form-aside,.sidebar {
                    margin-top: 50px
                }

                .roll-icon-box {
                    margin-bottom: 30px
                }

                .roll-promobox.aside-style,.roll-promobox.aside-style .promo-wrap,.roll-promobox.aside-style .promo-content,.roll-promobox.aside-style .promo-controls {
                    display: block;
                    text-align: center;
                    width: 100%
                }

                .roll-promobox.aside-style .title {
                    margin-bottom: 20px
                }

                .roll-project.fullwidth .project-item {
                    width: 33.3%
                }

                .footer-widgets .widget {
                    margin-bottom: 50px
                }

                .roll-client .client-item img {
                    max-width: 100%
                }

                .blog-post:nth-of-type(2n+1) {
                    clear: left
                }
            }

            @media only screen and (max-width: 1024px) {
                .site-header.fixed {
                    position:static !important
                }

                .slides-container .slide-item,.panel-row-style {
                    background-attachment: scroll !important;
                    background-position: center !important
                }

                .panel-row-style.mob-pad-0 {
                    padding: 0 !important
                }

                .panel-row-style.mob-pad-15 {
                    padding: 15px 0 !important
                }

                .panel-row-style.mob-pad-30 {
                    padding: 30px 0 !important
                }

                .panel-row-style.mob-pad-45 {
                    padding: 45px 0 !important
                }

                .btn-menu {
                    display: block
                }

                .site-header {
                    position: static;
                    background-color: rgba(0,0,0,0.9)
                }

                .header-clone {
                    display: none
                }

                .posts-navigation {
                    overflow: hidden;
                    margin-bottom: 30px
                }
            }

            @media only screen and (max-width: 780px) {
                .roll-client .client-item img {
                    max-width:100%
                }

                .panel-grid-cell {
                    padding-left: 15px !important;
                    padding-right: 15px !important;
                    margin-bottom: 15px !important
                }

                h1 {
                    font-size: 32px
                }

                h2 {
                    font-size: 28px
                }

                h3 {
                    font-size: 22px
                }

                h4 {
                    font-size: 18px
                }

                h5 {
                    font-size: 16px
                }

                h6 {
                    font-size: 14px
                }
            }

            @media only screen and (min-device-width : 768px) and (max-device-width :1024px) and (orientation :landscape) {
                .parallax {
                    background-size:cover;
                    background-attachment: scroll;
                    background-position: top center !important
                }
            }

            @media only screen and (max-width: 767px) {
                .posts-layout {
                    max-width:100%
                }

                .masonry-layout .hentry {
                    width: 100%;
                    margin: 0 0 30px;
                    padding: 0 15px
                }

                .text-slider-section {
                    min-height: 190px
                }

                .text-slider .maintitle {
                    font-size: 32px;
                    line-height: 1.1;
                    padding-bottom: 10px
                }

                .text-slider .subtitle {
                    font-size: 16px;
                    line-height: 24px;
                    padding: 15px 0
                }

                .roll-button {
                    padding: 10px 30px
                }

                .roll-project .project-item {
                    width: 100%
                }

                .roll-project.fullwidth .project-item {
                    width: 50%
                }

                .roll-counter {
                    margin-bottom: 30px
                }

                .sydney_facts_widget .col-md-3:last-of-type .roll-counter {
                    margin-bottom: 0
                }

                .roll-counter .name-count {
                    padding: 5px 0
                }

                .single-post .author-post .author-avatar {
                    float: none;
                    margin-bottom: 20px
                }

                .single-post .author-post .author-info {
                    margin-left: 0;
                    padding: 0
                }

                .single-post .author-post ul.socials {
                    position: static
                }

                .single-post .author-post .intro {
                    clear: left;
                    padding-top: 10px
                }

                .comment-list .children {
                    margin-left: 75px
                }

                .error-wrap .error-search {
                    padding: 0 20px
                }

                .aside-image .content-wrap {
                    padding-left: 0;
                    padding-right: 0
                }

                .social-menu-widget a:before {
                    font-size: 42px
                }

                .btn-menu {
                    float: none;
                    margin: 15px auto 0
                }

                .header-wrap {
                    text-align: center
                }

                .site-header.float-header {
                    padding-top: 20px;
                    padding-bottom: 20px
                }

                .text-slider-section {
                    min-height: 0;
                    top: auto;
                    bottom: 0
                }

                .site-title {
                    font-size: 22px !important
                }

                .fluid-width-video-wrapper+#wp-custom-header-video-button {
                    display: none
                }
            }

            @media only screen and (max-width: 600px) {
                .roll-client .client-item {
                    padding:5px;
                    margin: 0;
                    width: 32.5%
                }
            }

            @media only screen and (max-width: 479px) {
                .roll-project.fullwidth .project-item {
                    width:100%
                }

                .blog-post,.service,.sidebar-column {
                    padding: 0
                }

                .roll-button {
                    font-size: 12px
                }

                .text-slider .maintitle {
                    font-size: 18px
                }

                .text-slider .subtitle {
                    font-size: 14px
                }

                .text-slider {
                    margin-bottom: 5px
                }

                .text-slider .subtitle {
                    padding: 5px 0
                }

                .button-slider {
                    padding: 5px 15px;
                    font-size: 11px
                }
            }

            @media only screen and (max-width: 320px) {
                .text-slider {
                    margin-bottom:0
                }
            }

            @media screen and (min-width: 1025px) {
                .header-wrap .container>.row {
                    display:-webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center
                }
            }

            .mobile-slide {
                display: none
            }

            .sydney-hero-area {
                overflow: hidden
            }
        </style>
        <title>Selvbetjening - {{ config('app.name') }}</title>
        <link rel='stylesheet' id='sydney-fonts-css' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C400italic%2C600%7CRaleway%3A400%2C500%2C600' type='text/css' media='all'/>
        <style id='sydney-style-inline-css' type='text/css'>
            .site-title {
                font-size: 32px;
            }

            .site-description {
                font-size: 16px;
            }

            h1 {
                font-size: 52px;
            }

            h2 {
                font-size: 42px;
            }

            h3 {
                font-size: 32px;
            }

            h4 {
                font-size: 25px;
            }

            h5 {
                font-size: 20px;
            }

            h6 {
                font-size: 18px;
            }

            body {
                font-size: 14px;
            }

            .header-image {
                background-size: cover;
            }

            .header-image {
                height: 150px;
            }

            .roll-socials li a:hover,.roll-socials li a,.roll-button.light:hover,.roll-button.border,.roll-button,.roll-icon-list .icon,.roll-icon-box .icon,.owl-theme .owl-controls .owl-page span,.comment .comment-detail,.widget-tags .tag-list a:hover,.blog-pagination ul li,.hentry blockquote,.error-wrap #search-submit:hover,textarea:focus,input[type="text"]:focus,input[type="password"]:focus,input[type="datetime"]:focus,input[type="datetime-local"]:focus,input[type="date"]:focus,input[type="month"]:focus,input[type="time"]:focus,input[type="week"]:focus,input[type="number"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="search"]:focus,input[type="tel"]:focus,input[type="color"]:focus, button, input[type="button"], input[type="reset"], input[type="submit"], .archive .team-social li a {
                border-color: #33485d
            }

            .site-header.float-header {
                background-color: rgba(0,0,0,0.9);
            }

            @media only screen and (max-width: 1024px) {
                .site-header {
                    background-color:#000000;
                }
            }

            .site-title a, .site-title a:hover {
                color: #ffffff
            }

            .site-description {
                color: #ffffff
            }

            .text-slider .maintitle, .text-slider .subtitle {
                color: #ffffff
            }

            body {
                color: #000000
            }

            #secondary {
                background-color: #ffffff
            }

            #secondary, #secondary a, #secondary .widget-title {
                color: #767676
            }

            .footer-widgets {
                background-color: #252525
            }

            .btn-menu {
                color: #ffffff
            }

            .site-footer {
                background-color: #1c1c1c
            }

            .site-footer,.site-footer a {
                color: #666666
            }

            .overlay {
                background-color: #000000
            }

            .page-wrap {
                padding-top: 83px;
            }

            .page-wrap {
                padding-bottom: 100px;
            }

            @media only screen and (max-width: 1025px) {
                .mobile-slide {
                    display: block;
                }

                .slide-item {
                    background-image: none !important;
                }

                .header-slider {
                }

                .slide-item {
                    height: auto !important;
                }

                .slide-inner {
                    min-height: initial;
                }
            }
        </style>
        <style type="text/css">
            .header-image {
                background-image: url(https://pop.dk/wp-content/uploads/2017/08/cropped-Panorama.jpg);
                display: block;
            }

            @media only screen and (max-width: 1024px) {
                .header-inner {
                    display: block;
                }

                .header-image {
                    background-image: none;
                    height: auto !important;
                }
            }
        </style>
        <link rel="icon" href="https://pop.dk/wp-content/uploads/2017/08/cropped-icon-32x32.png" sizes="32x32"/>
        <link rel="icon" href="https://pop.dk/wp-content/uploads/2017/08/cropped-icon-192x192.png" sizes="192x192"/>
        <link rel="apple-touch-icon-precomposed" href="https://pop.dk/wp-content/uploads/2017/08/cropped-icon-180x180.png"/>
        <meta name="msapplication-TileImage" content="https://pop.dk/wp-content/uploads/2017/08/cropped-icon-270x270.png"/>
        <style type="text/css" id="wp-custom-css">

            .site-title a:link, .site-title a:visited , .site-title a:hover, .site-title a:active, .slide-inner a:link, .slide-inner a:visited {
                color: #ffffff
            }

            a:link {
                color: #1e73be;
            }

            a:visited {
                color: #1e73be;
            }

            a:hover {
                color: #ff0000;
            }

            a:active {
                color: #dd3333;
            }

            @media only screen and (max-width : 1024px) {
                .header-image {
                    display: none;
                }

                .page-wrap {
                    padding-top: 0px;
                }
            }
        </style>
    </head>
    <body class="page-template-default page page-id-68 page-parent">
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <div class="header-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-8 col-xs-12">
                                <h1 class="site-title">
                                    <a href="{{ config('app.url') }}" rel="home">{{ config('app.name') }}</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="sydney-hero-area">
                <div class="header-image">
                    <div class="overlay"></div>
                    <img class="header-inner" src="https://pop.dk/wp-content/uploads/2017/08/cropped-Panorama.jpg" width="1920" alt="{{ config('app.name') }}" title="{{ config('app.name') }}">
                </div>
            </div>
            <div id="content" class="page-wrap">
                <div class="container content-wrapper">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Gå til {{ config('app.name') }}." href="https://pop.dk/" class="home">
                                <span property="name">{{ config('app.name') }}</span>
                            </a>
                            <meta property="position" content="1">
                        </span>
                        &gt;
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name">@yield ('title')</span>
                            <meta property="position" content="2">
                        </span>
                    </div>
                    <br>
                    <div class="row">
                        <div id="primary" class="content-area col-md-9">
                            <main id="main" class="post-wrap" role="main">
                                <article id="post-68" class="post-68 page type-page status-publish hentry">
                                    <header class="entry-header">
                                        <h1 class="title-post entry-title">@yield ('title')</h1>
                                    </header>
                                    <div class="entry-content">
										@yield ('content')
                                    </div>
                                </article>
                            </main>
                        </div>
                        <div id="secondary" class="widget-area col-md-3" role="complementary">
                            <aside id="text-2" class="widget widget_text">
                                <h3 class="widget-title">Kontakt</h3>
                                <div class="textwidget">
                                    <p>
                                        <strong>Fejl på hjemmesiden?</strong>
                                    </p>
                                    <p>
                                        Skriv til <a href="{{ env('SUPPORT_URL') }}">Netværksudvalget</a>
                                        <br/>
                                        <a href="mailto:{{ env('SUPPORT_MAIL') }}">{{ env('SUPPORT_MAIL') }}</a>
                                    </p>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="site-info container">&copy;{{ date('Y') }}, {{ config('app.name') }}</div>
            </footer>
        </div>
    </body>
</html>
