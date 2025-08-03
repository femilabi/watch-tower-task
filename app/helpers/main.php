<?php
namespace App\Helpers;

function isValidSlug($stext)
{
	//$rename = "/^([[:alnum:]]+[_\-]{0,1})+([[:alnum:]]+)$/i";
	$rename = "/^[a-z0-9]+(?:[_\-][a-z0-9]+)*$/";
	return preg_match($rename, $stext);
}

function remove_accent($str)
{
	$a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
	$b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
	return str_replace($a, $b, $str);
}

function post_slug($str)
{
	return trim(strtolower(preg_replace(
		array('/[^a-zA-Z0-9 -]+/', '/[ -]+/', '/^-|-$/'),
		array('-', '-', ''),
		remove_accent($str)
	)));
}
function getSlug($str, $table, $prefered_suffix = '')
{
	$slug = post_slug($str);
	return verifySlug($slug, $table, $prefered_suffix);
}

function verifySlug($slug, $table, $prefered_suffix = '')
{
	if (!$slug)
		return;
	$exists = 0;

	//check for existence
	$db = new \App\Core\Database();
	$db->query("SELECT * FROM $table WHERE title_unique = :title_unique");
	$db->bind(':title_unique', $slug);
	$post = $db->result();
	if ($post)
		$exists = 1;

	//recalculate or return
	if ($exists) {
		if ($prefered_suffix && !(strlen($slug) > strlen($prefered_suffix) && substr($slug, -(strlen($prefered_suffix) + 1)) == '-' . $prefered_suffix))
			return verifySlug($slug . '-' . $prefered_suffix, $table);
		if (strpos($slug, '-') === false) {
			$slug .= '-1';
		} else {
			$fragments = explode('-', $slug);
			if (is_numeric($fragments[count($fragments) - 1])) {
				$fragments[count($fragments) - 1] += 1;
				$slug = implode('-', $fragments);
				if ($fragments[count($fragments) - 1] > 99)
					$slug .= '-1';
			} else {
				$slug .= '-1';
			}
		}
	}
	return $slug;
}

function uploadFile($fileKey, $targetBucket = 'general', $allowedTypes = ['jpg', 'png', 'jpeg'])
{
	$targetDir = __DIR__ . "/../uploads/$targetBucket/";
	if (!is_dir($targetDir)) {
		mkdir($targetDir, 0777, true);
	}
	$fileName = basename($_FILES[$fileKey]['name']);
	$targetFile = $targetDir . generateFileName($fileName);
	$uploadOk = 1;
	$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

	// Allow certain file formats (add more as needed)
	if (!in_array($fileType, $allowedTypes)) {
		$uploadOk = 0;
		$error = "Sorry, only " . implode(", ", $allowedTypes) . " are allowed.";
	}

	if ($uploadOk && move_uploaded_file($_FILES[$fileKey]['tmp_name'], $targetFile)) {
		return [
			'success' => 'The file ' . htmlspecialchars($fileName) . ' has been uploaded.',
			'file_path' => BASE_URL . 'uploads/' . $fileName // Return the file path for further use
		];
	} else {
		return [
			'error' => isset($error) ? $error : 'Sorry, there was an error uploading your file.'
		];
	}
}

function generateFileName($fileName)
{
	// Generate a unique file name based on the current timestamp and the original file name
	$timestamp = time();
	$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
	return $timestamp . '-' . rand(100, 1000) . '.' . $fileExtension;
}

function purifyHtml($html)
{
	// Initialize HTML Purifier
	$config = \HTMLPurifier_Config::createDefault();
	// Allow some safe inline styles and tags
	$config->set('HTML.Allowed', 'p,b,strong,i,em,ul,ol,li,br,span,div,blockquote,h1,h2,h3,h4,h5,h6,hr,pre,code');
	$config->set('CSS.AllowedProperties', [
		'color',
		'background-color',
		'font',
		'font-size',
		'font-weight',
		'font-family',
		'text-align',
		'text-decoration',
		'line-height',
		'padding',
		'margin',
		'border',
		'border-radius',
		'width',
		'height',
		'display',
		'max-width',
		'min-width',
		'max-height',
		'min-height'
	]);
	$config->set('HTML.AllowStyles', true);
	$config->set('Attr.AllowedFrameTargets', []); // remove target if needed

	// Remove script, link, iframe etc.
	$config->set('HTML.SafeObject', false);
	$config->set('HTML.SafeEmbed', false);
	$config->set('HTML.SafeIframe', false);
	$config->set('URI.DisableJavaScript', true);

	$purifier = new \HTMLPurifier($config);

	// Purify the HTML content
	return $purifier->purify($html);
}