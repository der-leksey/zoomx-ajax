<?php
zoomx()->getLoader()->addPsr4('Ajax\\Controllers\\', __DIR__ . '/controllers/');
parserx()->setPluginsDir(__DIR__ . '/smarty');
parserx()->loadFilter('pre', 'ajax');