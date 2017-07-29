<?php
	//phpinfo(); exit;
	ini_set('display_errors', 1);
	include_once('AES.php');   
	$inputText = "bew2pj2D4m9r6\/AlEywvISJKZ3QYKrFMedTtqapJu0JY7g1dYPxgOIj+2N7ewJpWnL2zgeim7dERM8e34+1lNk7VR\/wCbUpq2BXVPxdhhLRLLKz6wOYwEBeZtCdKyiIGUr3I4UDiTbpgLm9p2Qhk6zQI9iVUI7g8DkQA\/a6DWpmFPeR\/mFTnqJxnp2EvBc\/A8HU4KJa4gLzQ0s8piySxKqV8NdF5h+LA+Kt1BdAMB5X32NOf9HvqIN1XN6rrIplUkei5DRLqhrIEpOMJAPba3m0z4Ibg7\/L6eFDdaABr0sBEwJx9F5DZAX7Cah3+QLTsOGU3qVYkj\/UXsy82dbvCpFjI4Fhdm2tKmb3aqWocgrAP7pBLiH50Pe9a2iBLFiMtntHw1BvxWCgAFooJJ2pmJ+Wz\/9H9AuTThzSYV4C0Uqk+Jg8kggpKafsfZ4zV86ryUslvVwZOLZdLCvlNwDiPmZbXBEDEKCHIMmR988tEmeryi87QdJemz+iSjlHGEZ3GNiES470By0t4p4ZAQzp8ilHr3upFqOzUT\/jHE08R4y22uZddtGoqPMcxPcGlPT9CIAS9dEEz492yOnkcHN5dyrwfH8lU7sWfopl\/BhePm1gsy1rAgOZlRlXjeRHGUcDlB60HcSPqrMF4\/CI2r3Z8y1hCidJJ+YeY2xhqQrIar+CIMUx63Oyu3nhCs9CgO4jgvloC6neYHMVVklixCMOygVhhf5E1bHdj4TIh+0GF2lpZBjPnepY3DGG9ZQRotNOuPfrKXMnc\/jSZTf+bDAvm9DTo2Cq9fYZTyv5ONFom7F1sWBgOETOd8dJiNjA5a2Hx\/ihwUMCicAM4cA15jmsPCFhGGmO53JI6Z8MBrqA5EniOeIA8xh3VEYZJMd\/vpVQkENQx+WbjQylokwsOW8HinzjanIvkH0IS0sTI+bB5FYA0xh+rdqQoW+qaenq\/abwUdlMdK2v8zrIo8+ELa0zXZEhYI+U11vjSDnmbXD8QoDe9Vw21JAUYiWD4LGJbDefu2VB\/aZO6H3WY0VD\/XN7Xur0Nt0sQltWiDJ7NaY7ocN5B3gNEQ3tXTMw63pQugnAhZrxwx++0QxSga59ZOwt8O55b1teS93Q4nvenenU9Gi2D2DmmwPX3vtn71xD38p9OMnuhcsqGrCivpZCYtcWZwqqivVYfWdZD+FyU7VP+F7TROHIAYhQCTkvYyiY0x8xDIvNOCQn+p1HaVG0P0s4Dh\/1abnjJy0WVh94rgkUYZ1E3GdOTefrM8u2InvsEszsMp4uF7E+Uxn1y1wijpONGqgdaCpVrrSKrsilqXvWgilTiZCBX730abajgr1uQbrXxhH7OYeCAnNiRW4F4Cimfz6NsjEAgPZowD83I8GkXl3o=";
	$inputKey = "eECHALLAN@JSON$#";
	$blockSize = 128;
	$aes = new AES($inputText, $inputKey, $blockSize);
	//$enc = $aes->encrypt();
	//$aes->setData($enc);
	echo $dec=$aes->decrypt();
	exit;