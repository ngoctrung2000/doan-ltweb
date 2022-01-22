<?php
function getYouTubeVideoId($url)
{
     $video_id = false;
     $url = parse_url($url);
     if (strcasecmp($url['host'], 'youtu.be') === 0)
     {
          #### (dontcare)://youtu.be/<video id>
          $video_id = substr($url['path'], 1);
     }
     elseif (strcasecmp($url['host'], 'www.youtube.com') === 0)
     {
          if (isset($url['query']))
          {
               parse_str($url['query'], $url['query']);
               if (isset($url['query']['v']))
               {
                    #### (dontcare)://www.youtube.com/(dontcare)?v=<video id>
                    $video_id = $url['query']['v'];
               }
           }
           if ($video_id == false)
           {
               $url['path'] = explode('/', substr($url['path'], 1));
               if (in_array($url['path'][0], array('e', 'embed', 'v')))
               {
                    #### (dontcare)://www.youtube.com/(whitelist)/<video id>
                    $video_id = $url['path'][1];
               }
            }
     }else{
         return false;
     }
     return $video_id;
}
$urls = array(
    'http://youtu.be/dQw4w9WgXcQ',
    'http://www.youtube.com/?v=dQw4w9WgXcQ',
    'http://www.youtube.com/?v=dQw4w9WgXcQ&feature=player_embedded',
    'http://www.youtube.com/watch?v=dQw4w9WgXcQ',
    'http://www.youtube.com/watch?v=dQw4w9WgXcQ&feature=player_embedded',
    'http://www.youtube.com/v/dQw4w9WgXcQ',
    'http://www.youtube.com/e/dQw4w9WgXcQ',
    'http://www.youtube.com/embed/dQw4w9WgXcQ',
    'http://www.youtube.com/watch?t=40s&v=dQw4w9WgXcQ',
    'https://www.youtube.com/watch?v=u8nQa1cJyX8&list=RDu8nQa1cJyX8#t=45'
);
foreach ($urls as $url)
{
     echo sprintf('%s -> %s <br>' . PHP_EOL, $url, getYouTubeVideoId($url));
}
?>