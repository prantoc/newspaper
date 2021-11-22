/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP SERVER
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : newspaper

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 17/11/2021 13:34:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int UNSIGNED NULL DEFAULT NULL,
  `order` int NOT NULL DEFAULT 1,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `frontpage` int NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categories_slug_unique`(`slug`) USING BTREE,
  INDEX `categories_parent_id_foreign`(`parent_id`) USING BTREE,
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 67 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, NULL, 2, 'জাতীয়', 'national', '2021-11-07 07:57:18', '2021-11-16 21:37:18', NULL, 1);
INSERT INTO `categories` VALUES (2, NULL, 3, 'রাজনীতি', 'politics', '2021-11-07 07:57:40', '2021-11-16 21:37:18', NULL, 1);
INSERT INTO `categories` VALUES (37, NULL, 4, 'সারাদেশ', 'country', '2021-11-07 08:08:54', '2021-11-16 21:37:18', NULL, 1);
INSERT INTO `categories` VALUES (41, NULL, 5, 'খেলা', 'sports', '2021-11-07 08:10:34', '2021-11-16 21:37:18', NULL, 1);
INSERT INTO `categories` VALUES (42, NULL, 7, 'বিনোদন', 'entertainment', '2021-11-07 08:10:59', '2021-11-16 21:37:18', NULL, 1);
INSERT INTO `categories` VALUES (44, NULL, 1, 'মতামত', 'opinion', '2021-11-13 13:03:49', '2021-11-16 12:16:08', NULL, 1);
INSERT INTO `categories` VALUES (48, NULL, 6, 'শিক্ষা', 'education', '2021-11-16 13:29:27', '2021-11-16 21:37:18', NULL, 1);
INSERT INTO `categories` VALUES (49, 1, 20, 'জাতীয় সংসদ', 'জাতীয়-সংসদ', '2021-11-16 14:00:26', '2021-11-17 13:07:31', NULL, 1);
INSERT INTO `categories` VALUES (51, 2, 19, 'BNP', 'bnp', '2021-11-16 16:01:36', '2021-11-17 13:07:31', NULL, 1);
INSERT INTO `categories` VALUES (52, 37, 21, 'ভিন্ন স্বাদের খবর', 'ভিন্ন-স্বাদের-খবর', '2021-11-16 16:20:06', '2021-11-17 13:07:31', NULL, 0);
INSERT INTO `categories` VALUES (53, 41, 14, 'ক্রিকেট', 'ক্রিকেট', '2021-11-16 17:42:58', '2021-11-17 13:07:29', NULL, 0);
INSERT INTO `categories` VALUES (54, 41, 15, 'ফুটবল', 'ফুটবল', '2021-11-16 17:43:21', '2021-11-17 13:07:29', NULL, 0);
INSERT INTO `categories` VALUES (55, 41, 16, 'টেনিস', 'টেনিস', '2021-11-16 17:43:58', '2021-11-17 13:07:29', NULL, 0);
INSERT INTO `categories` VALUES (56, 41, 17, 'অন্যান্য', 'অন্যান্য', '2021-11-16 17:44:17', '2021-11-17 13:07:29', NULL, 0);
INSERT INTO `categories` VALUES (57, 48, 22, 'জাতীয় বিশ্ববিদ্যালয়', 'জাতীয়-বিশ্ববিদ্যালয়', '2021-11-16 21:06:41', '2021-11-17 13:07:31', NULL, 0);
INSERT INTO `categories` VALUES (58, 42, 18, 'বলিউড', 'বলিউড', '2021-11-16 21:36:20', '2021-11-17 13:07:29', NULL, 0);
INSERT INTO `categories` VALUES (59, 42, 13, 'হলিউড', 'হলিউড', '2021-11-16 21:36:38', '2021-11-17 13:07:29', NULL, 0);
INSERT INTO `categories` VALUES (60, 42, 12, 'ঢালিউড', 'ঢালিউড', '2021-11-16 21:36:57', '2021-11-17 13:07:29', NULL, 0);
INSERT INTO `categories` VALUES (61, NULL, 8, 'লাইফস্টাইল', 'লাইফস্টাইল', '2021-11-16 22:24:10', '2021-11-16 22:24:10', NULL, 1);
INSERT INTO `categories` VALUES (62, NULL, 9, 'তথ্যপ্রযুক্তি', 'তথ্যপ্রযুক্তি', '2021-11-16 22:24:42', '2021-11-17 13:07:29', NULL, 1);
INSERT INTO `categories` VALUES (63, NULL, 10, 'ধর্ম', 'ধর্ম', '2021-11-16 22:25:07', '2021-11-17 13:07:29', NULL, 1);
INSERT INTO `categories` VALUES (64, NULL, 11, 'জবস', 'জবস', '2021-11-16 22:25:27', '2021-11-17 13:07:29', NULL, 1);
INSERT INTO `categories` VALUES (65, 1, 23, 'কোভিড টিকা', 'কোভিড-টিকা', '2021-11-17 13:04:01', '2021-11-17 13:07:31', NULL, 0);
INSERT INTO `categories` VALUES (66, 37, 24, 'স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়', 'স্বাস্থ্য-ও-পরিবার-কল্যাণ-মন্ত্রণালয়', '2021-11-17 13:07:17', '2021-11-17 13:07:31', NULL, 0);

-- ----------------------------
-- Table structure for data_rows
-- ----------------------------
DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE `data_rows`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_type_id` int UNSIGNED NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `order` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `data_rows_data_type_id_foreign`(`data_type_id`) USING BTREE,
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 73 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_rows
-- ----------------------------
INSERT INTO `data_rows` VALUES (1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3);
INSERT INTO `data_rows` VALUES (4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5);
INSERT INTO `data_rows` VALUES (6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6);
INSERT INTO `data_rows` VALUES (7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7);
INSERT INTO `data_rows` VALUES (8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8);
INSERT INTO `data_rows` VALUES (9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10);
INSERT INTO `data_rows` VALUES (10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11);
INSERT INTO `data_rows` VALUES (11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12);
INSERT INTO `data_rows` VALUES (12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3);
INSERT INTO `data_rows` VALUES (15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3);
INSERT INTO `data_rows` VALUES (19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5);
INSERT INTO `data_rows` VALUES (21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9);
INSERT INTO `data_rows` VALUES (22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1);
INSERT INTO `data_rows` VALUES (23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 1, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2);
INSERT INTO `data_rows` VALUES (24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3);
INSERT INTO `data_rows` VALUES (25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4);
INSERT INTO `data_rows` VALUES (26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5);
INSERT INTO `data_rows` VALUES (27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 6);
INSERT INTO `data_rows` VALUES (28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7);
INSERT INTO `data_rows` VALUES (29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1);
INSERT INTO `data_rows` VALUES (30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2);
INSERT INTO `data_rows` VALUES (31, 5, 'category_id', 'select_dropdown', 'Category', 0, 1, 1, 1, 1, 0, '{}', 3);
INSERT INTO `data_rows` VALUES (32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4);
INSERT INTO `data_rows` VALUES (33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5);
INSERT INTO `data_rows` VALUES (34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6);
INSERT INTO `data_rows` VALUES (35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7);
INSERT INTO `data_rows` VALUES (36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8);
INSERT INTO `data_rows` VALUES (37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9);
INSERT INTO `data_rows` VALUES (38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10);
INSERT INTO `data_rows` VALUES (39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11);
INSERT INTO `data_rows` VALUES (40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12);
INSERT INTO `data_rows` VALUES (41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13);
INSERT INTO `data_rows` VALUES (42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14);
INSERT INTO `data_rows` VALUES (43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15);
INSERT INTO `data_rows` VALUES (44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2);
INSERT INTO `data_rows` VALUES (46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3);
INSERT INTO `data_rows` VALUES (47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4);
INSERT INTO `data_rows` VALUES (48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5);
INSERT INTO `data_rows` VALUES (49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6);
INSERT INTO `data_rows` VALUES (50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7);
INSERT INTO `data_rows` VALUES (51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8);
INSERT INTO `data_rows` VALUES (52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9);
INSERT INTO `data_rows` VALUES (53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10);
INSERT INTO `data_rows` VALUES (54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11);
INSERT INTO `data_rows` VALUES (55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12);
INSERT INTO `data_rows` VALUES (56, 5, 'hit', 'hidden', 'Hit', 0, 1, 1, 0, 0, 0, '{}', 16);
INSERT INTO `data_rows` VALUES (59, 4, 'description', 'rich_text_box', 'Description', 0, 0, 1, 1, 1, 1, '{}', 8);
INSERT INTO `data_rows` VALUES (60, 4, 'frontpage', 'checkbox', 'Frontpage', 0, 1, 1, 1, 1, 1, '{}', 9);

-- ----------------------------
-- Table structure for data_types
-- ----------------------------
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `model_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `policy_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint NOT NULL DEFAULT 0,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `data_types_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `data_types_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_types
-- ----------------------------
INSERT INTO `data_types` VALUES (1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `data_types` VALUES (2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `data_types` VALUES (3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `data_types` VALUES (4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"order\",\"order_display_column\":\"name\",\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-10-05 21:09:00', '2021-11-15 16:50:29');
INSERT INTO `data_types` VALUES (5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-10-05 21:09:00', '2021-11-16 16:09:29');
INSERT INTO `data_types` VALUES (6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2021-10-05 21:09:01', '2021-10-05 21:09:01');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for menu_items
-- ----------------------------
DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` int UNSIGNED NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` int NULL DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `menu_items_menu_id_foreign`(`menu_id`) USING BTREE,
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu_items
-- ----------------------------
INSERT INTO `menu_items` VALUES (1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-10-05 21:09:00', '2021-10-05 21:09:00', 'voyager.dashboard', NULL);
INSERT INTO `menu_items` VALUES (2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2021-10-05 21:09:00', '2021-11-16 14:13:16', 'voyager.media.index', NULL);
INSERT INTO `menu_items` VALUES (3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2021-10-05 21:09:00', '2021-10-05 21:09:00', 'voyager.users.index', NULL);
INSERT INTO `menu_items` VALUES (4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2021-10-05 21:09:00', '2021-10-05 21:09:00', 'voyager.roles.index', NULL);
INSERT INTO `menu_items` VALUES (5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 7, '2021-10-05 21:09:00', '2021-11-16 14:13:16', NULL, NULL);
INSERT INTO `menu_items` VALUES (6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2021-10-05 21:09:00', '2021-11-16 13:08:49', 'voyager.menus.index', NULL);
INSERT INTO `menu_items` VALUES (7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2021-10-05 21:09:00', '2021-11-16 13:08:49', 'voyager.database.index', NULL);
INSERT INTO `menu_items` VALUES (8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-10-05 21:09:00', '2021-11-16 13:08:49', 'voyager.compass.index', NULL);
INSERT INTO `menu_items` VALUES (9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-10-05 21:09:00', '2021-11-16 13:08:49', 'voyager.bread.index', NULL);
INSERT INTO `menu_items` VALUES (10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 8, '2021-10-05 21:09:00', '2021-11-16 14:13:16', 'voyager.settings.index', NULL);
INSERT INTO `menu_items` VALUES (11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, 39, 1, '2021-10-05 21:09:00', '2021-11-16 13:10:46', 'voyager.categories.index', NULL);
INSERT INTO `menu_items` VALUES (12, 1, 'Posts', '', '_self', 'voyager-receipt', '#000000', 39, 2, '2021-10-05 21:09:01', '2021-11-16 14:17:38', 'voyager.posts.index', 'null');
INSERT INTO `menu_items` VALUES (13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 6, '2021-10-05 21:09:01', '2021-11-16 14:13:16', 'voyager.pages.index', NULL);
INSERT INTO `menu_items` VALUES (17, 3, 'প্রচ্ছদ', '/', '_self', NULL, '#000000', NULL, 1, '2021-10-25 21:24:27', '2021-11-06 01:59:23', NULL, '');
INSERT INTO `menu_items` VALUES (18, 3, 'জাতীয়', '/post/national', '_self', 'voyager-angle-down', '#000000', NULL, 3, '2021-10-25 21:27:35', '2021-11-15 16:36:59', NULL, '');
INSERT INTO `menu_items` VALUES (20, 4, 'মতামত', '/post/national', '_self', NULL, '#000000', NULL, 1, '2021-11-04 03:30:16', '2021-11-05 01:04:21', NULL, '');
INSERT INTO `menu_items` VALUES (21, 4, 'ধর্ম', '/post/national', '_self', NULL, '#000000', NULL, 2, '2021-11-04 03:32:52', '2021-11-05 01:07:57', NULL, '');
INSERT INTO `menu_items` VALUES (22, 4, 'ছোটদের পোস্ট', '/post/national', '_self', NULL, '#000000', NULL, 3, '2021-11-04 03:33:12', '2021-11-05 01:07:57', NULL, '');
INSERT INTO `menu_items` VALUES (25, 3, 'রাজনীতি', '/post/politics', '_self', NULL, '#000000', NULL, 4, '2021-11-07 10:15:26', '2021-11-15 16:37:45', NULL, '');
INSERT INTO `menu_items` VALUES (26, 3, 'আন্তর্জাতিক', '/post/international', '_self', NULL, '#000000', NULL, 7, '2021-11-07 10:16:09', '2021-11-15 16:38:05', NULL, '');
INSERT INTO `menu_items` VALUES (27, 3, 'অর্থনীতি', '/post/economy', '_self', NULL, '#000000', NULL, 5, '2021-11-07 10:16:38', '2021-11-15 16:37:53', NULL, '');
INSERT INTO `menu_items` VALUES (28, 3, 'খেলা', '', '_self', NULL, '#000000', NULL, 8, '2021-11-07 10:17:01', '2021-11-13 11:46:52', NULL, '');
INSERT INTO `menu_items` VALUES (29, 3, 'বিনোদন', '', '_self', NULL, '#000000', NULL, 9, '2021-11-07 10:17:16', '2021-11-13 11:46:52', NULL, '');
INSERT INTO `menu_items` VALUES (30, 3, 'সারাদেশ', '', '_self', NULL, '#000000', NULL, 6, '2021-11-07 10:17:38', '2021-11-13 11:46:52', NULL, '');
INSERT INTO `menu_items` VALUES (32, 3, 'স্বাস্থ্য', '', '_self', NULL, '#000000', NULL, 10, '2021-11-07 10:18:18', '2021-11-13 11:46:26', NULL, '');
INSERT INTO `menu_items` VALUES (33, 3, 'শিক্ষা', '', '_self', NULL, '#000000', NULL, 11, '2021-11-07 10:18:42', '2021-11-13 11:46:26', NULL, '');
INSERT INTO `menu_items` VALUES (34, 3, 'জবস', '', '_self', NULL, '#000000', NULL, 12, '2021-11-07 10:22:19', '2021-11-13 11:46:26', NULL, '');
INSERT INTO `menu_items` VALUES (35, 3, 'প্রবাস', '', '_self', NULL, '#000000', NULL, 13, '2021-11-07 10:22:30', '2021-11-13 11:46:26', NULL, '');
INSERT INTO `menu_items` VALUES (36, 3, 'সর্বশেষ', '/latest-news', '_self', NULL, '#000000', NULL, 2, '2021-11-07 10:22:54', '2021-11-17 12:26:16', NULL, '');
INSERT INTO `menu_items` VALUES (39, 1, 'News Post', '', '_self', 'voyager-news', '#000000', NULL, 4, '2021-11-16 13:10:31', '2021-11-16 13:10:40', NULL, '');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `menus_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, 'admin', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `menus` VALUES (3, 'main_menu', '2021-10-25 21:23:57', '2021-10-25 21:23:57');
INSERT INTO `menus` VALUES (4, 'sidebar_menu', '2021-11-04 03:29:37', '2021-11-04 03:29:37');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2016_01_01_000000_add_voyager_user_fields', 1);
INSERT INTO `migrations` VALUES (4, '2016_01_01_000000_create_data_types_table', 1);
INSERT INTO `migrations` VALUES (5, '2016_05_19_173453_create_menu_table', 1);
INSERT INTO `migrations` VALUES (6, '2016_10_21_190000_create_roles_table', 1);
INSERT INTO `migrations` VALUES (7, '2016_10_21_190000_create_settings_table', 1);
INSERT INTO `migrations` VALUES (8, '2016_11_30_135954_create_permission_table', 1);
INSERT INTO `migrations` VALUES (9, '2016_11_30_141208_create_permission_role_table', 1);
INSERT INTO `migrations` VALUES (10, '2016_12_26_201236_data_types__add__server_side', 1);
INSERT INTO `migrations` VALUES (11, '2017_01_13_000000_add_route_to_menu_items_table', 1);
INSERT INTO `migrations` VALUES (12, '2017_01_14_005015_create_translations_table', 1);
INSERT INTO `migrations` VALUES (13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1);
INSERT INTO `migrations` VALUES (14, '2017_03_06_000000_add_controller_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (15, '2017_04_21_000000_add_order_to_data_rows_table', 1);
INSERT INTO `migrations` VALUES (16, '2017_07_05_210000_add_policyname_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (17, '2017_08_05_000000_add_group_to_settings_table', 1);
INSERT INTO `migrations` VALUES (18, '2017_11_26_013050_add_user_role_relationship', 1);
INSERT INTO `migrations` VALUES (19, '2017_11_26_015000_create_user_roles_table', 1);
INSERT INTO `migrations` VALUES (20, '2018_03_11_000000_add_user_settings', 1);
INSERT INTO `migrations` VALUES (21, '2018_03_14_000000_add_details_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (22, '2018_03_16_000000_make_settings_value_nullable', 1);
INSERT INTO `migrations` VALUES (23, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (24, '2016_01_01_000000_create_pages_table', 2);
INSERT INTO `migrations` VALUES (25, '2016_01_01_000000_create_posts_table', 2);
INSERT INTO `migrations` VALUES (26, '2016_02_15_204651_create_categories_table', 2);
INSERT INTO `migrations` VALUES (27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` enum('ACTIVE','INACTIVE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `pages_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (1, 1, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', NULL, 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2021-10-05 21:09:01', '2021-11-06 00:07:17');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `permission_role_permission_id_index`(`permission_id`) USING BTREE,
  INDEX `permission_role_role_id_index`(`role_id`) USING BTREE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (1, 1);
INSERT INTO `permission_role` VALUES (2, 1);
INSERT INTO `permission_role` VALUES (3, 1);
INSERT INTO `permission_role` VALUES (4, 1);
INSERT INTO `permission_role` VALUES (5, 1);
INSERT INTO `permission_role` VALUES (6, 1);
INSERT INTO `permission_role` VALUES (7, 1);
INSERT INTO `permission_role` VALUES (8, 1);
INSERT INTO `permission_role` VALUES (9, 1);
INSERT INTO `permission_role` VALUES (10, 1);
INSERT INTO `permission_role` VALUES (11, 1);
INSERT INTO `permission_role` VALUES (12, 1);
INSERT INTO `permission_role` VALUES (13, 1);
INSERT INTO `permission_role` VALUES (14, 1);
INSERT INTO `permission_role` VALUES (15, 1);
INSERT INTO `permission_role` VALUES (16, 1);
INSERT INTO `permission_role` VALUES (17, 1);
INSERT INTO `permission_role` VALUES (18, 1);
INSERT INTO `permission_role` VALUES (19, 1);
INSERT INTO `permission_role` VALUES (20, 1);
INSERT INTO `permission_role` VALUES (21, 1);
INSERT INTO `permission_role` VALUES (22, 1);
INSERT INTO `permission_role` VALUES (23, 1);
INSERT INTO `permission_role` VALUES (24, 1);
INSERT INTO `permission_role` VALUES (25, 1);
INSERT INTO `permission_role` VALUES (26, 1);
INSERT INTO `permission_role` VALUES (27, 1);
INSERT INTO `permission_role` VALUES (28, 1);
INSERT INTO `permission_role` VALUES (29, 1);
INSERT INTO `permission_role` VALUES (30, 1);
INSERT INTO `permission_role` VALUES (31, 1);
INSERT INTO `permission_role` VALUES (32, 1);
INSERT INTO `permission_role` VALUES (33, 1);
INSERT INTO `permission_role` VALUES (34, 1);
INSERT INTO `permission_role` VALUES (35, 1);
INSERT INTO `permission_role` VALUES (36, 1);
INSERT INTO `permission_role` VALUES (37, 1);
INSERT INTO `permission_role` VALUES (38, 1);
INSERT INTO `permission_role` VALUES (39, 1);
INSERT INTO `permission_role` VALUES (40, 1);

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `permissions_key_index`(`key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'browse_admin', NULL, '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (2, 'browse_bread', NULL, '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (3, 'browse_database', NULL, '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (4, 'browse_media', NULL, '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (5, 'browse_compass', NULL, '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (6, 'browse_menus', 'menus', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (7, 'read_menus', 'menus', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (8, 'edit_menus', 'menus', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (9, 'add_menus', 'menus', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (10, 'delete_menus', 'menus', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (11, 'browse_roles', 'roles', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (12, 'read_roles', 'roles', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (13, 'edit_roles', 'roles', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (14, 'add_roles', 'roles', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (15, 'delete_roles', 'roles', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (16, 'browse_users', 'users', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (17, 'read_users', 'users', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (18, 'edit_users', 'users', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (19, 'add_users', 'users', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (20, 'delete_users', 'users', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (21, 'browse_settings', 'settings', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (22, 'read_settings', 'settings', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (23, 'edit_settings', 'settings', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (24, 'add_settings', 'settings', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (25, 'delete_settings', 'settings', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (26, 'browse_categories', 'categories', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (27, 'read_categories', 'categories', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (28, 'edit_categories', 'categories', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (29, 'add_categories', 'categories', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (30, 'delete_categories', 'categories', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `permissions` VALUES (31, 'browse_posts', 'posts', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `permissions` VALUES (32, 'read_posts', 'posts', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `permissions` VALUES (33, 'edit_posts', 'posts', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `permissions` VALUES (34, 'add_posts', 'posts', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `permissions` VALUES (35, 'delete_posts', 'posts', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `permissions` VALUES (36, 'browse_pages', 'pages', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `permissions` VALUES (37, 'read_pages', 'pages', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `permissions` VALUES (38, 'edit_pages', 'pages', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `permissions` VALUES (39, 'add_pages', 'pages', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `permissions` VALUES (40, 'delete_pages', 'pages', '2021-10-05 21:09:01', '2021-10-05 21:09:01');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `category_id` int NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hit` int NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `posts_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (59, 1, 65, 'বাংলাদেশসহ চার দেশে টিকা রফতানি শুরু করেছে ভারত', NULL, NULL, '<p>করোনা সংক্রমণের দ্বিতীয় ঢেউ শুরুর পর চলতি বছরের এপ্রিল-মে মাসে টিকা রফতানি বন্ধ করে ভারত সরকার। এর পরের ৮ মাসে নিজেদের দেশে ১০০ কোটির কাছাকাছি মানুষেকে টিকার আওতায় আনার পর এখন ওই নিষেধাজ্ঞা কিছুটা শিথীল করল তারা। টিকা রফতানিতে যেসব বাণিজ্যিক চুক্তি করা হয়েছিল সেগুলোও সাময়িকভাবে স্থগিত ছিল এতদিন। &nbsp;</p>\r\n<p>অক্সফোর্ড-অ্যাস্ট্রাজেনেকার ফর্মুলায় ভারতের সেরাম ইনস্টিটিউটে তৈরি কোভিশিল্ড টিকার ওপর ভরসা করেই টিকা কার্যক্রম শুরু করেছিল বাংলাদেশ। এরপর হঠাত করে ভারত চুক্তি থেকে সরে এলে টিকা সংকটে পড়তে হয় বাংলাদেশকে। পরে চীনসহ অন্যান্য উৎস থেকে টিকাপ্রাপ্তি নিশ্চিত হলে সংকট কাটিয়ে পুরোদমে টিকা কার্যক্রম শুরু হয় বাংলাদেশে। &nbsp;&nbsp;</p>\r\n<p>এদিকে ভারতে এরইমধ্যে আরও বেশ কিছু টিকা অনুমোদন পেয়েছে। এগুলো হলো- কোভাভ্যক্স, করবিভ্যাক্স, জিকভডি, জেনোভাস এমএরএসএ ভ্যাক্সিন। &nbsp;</p>\r\n<p>ভারতে প্রায় ১০০ কোটি মানুষকে টিকার আওতায় আনা গেলেও এখনও বড় সংখ্যক মানুষের দ্বিতীয় ডোজ টিকা পাওয়া বাকি রয়েছে। তবে এরইমধ্যে তারা যেহেতু টিকা রফতানি শুরু করে দিচ্ছে, তাই ধরে নেওয়া হচ্ছে ভারত মনে করছে টিকার পর্যাপ্ত উৎপাদনে এখন সক্ষম তারা।&nbsp;</p>', 'posts\\November2021\\YtiknQywLLTxArD7Qjmw.jpg', 'বাংলাদেশসহ-চার-দেশে', NULL, NULL, 'PUBLISHED', 1, '2021-11-17 13:05:27', '2021-11-17 13:17:11', 1);
INSERT INTO `posts` VALUES (60, 1, 66, '৭ চিকিৎসককে সিভিল সার্জন পদে পদোন্নতি', NULL, NULL, '<p>এতে বলা হয়েছে, &lsquo;পুনরাদেশ না দেওয়া পর্যন্ত বিসিএস স্বাস্থ্য ক্যাডার ও স্বাস্থ্য সার্ভিসের নিম্নবর্ণিত কর্মকর্তাদেরকে তাদের নামের পাশে বর্ণিত পদ ও কর্মস্থলে বদলি ও পদায়ন করা হলো।&rsquo;</p>\r\n<p>পদোন্নতিপ্রাপ্ত চিকিৎসকরা হলেন- সিলেট বিয়ানীবাজার উপজেলা স্বাস্থ্য ও পরিবার পরিকল্পনা কর্মকর্তা ডা. মোয়াজ্জেম আলী খান চৌধুরী, কুমিল্লার ডেপুটি সিভিল সার্জন ডা. মোহাম্মদ শাহাদাৎ হোসেন, বাগেরহাট কচুয়ার উপজেলা স্বাস্থ্য ও পরিবার পরিকল্পনা কর্মকর্তা ডা. মো. মঞ্জুরুল আলম, শরীয়তপুর ১০০ শয্যা হাসপাতালের তত্ত্বাবধায়ক ডা. মুনীর আহমদ খান, দিনাজপুর ঘোরাঘাট উপজেলা স্বাস্থ্য ও পরিবার পরিকল্পনা কর্মকর্তা ডা. নুর নেওয়াজ আহমেদ, কুড়িগ্রামের ডেপুটি সিভিল সার্জন ডা. এ এইচ এম বোরহান-উল-ইসলাম সিদ্দিকী ও বরগুনার ডা. মারিয়া হাসান।</p>\r\n<p>জনস্বার্থে এ আদেশ জারি করা হলো এবং অবিলম্বে কার্যকর হবে বলে বলা হয় প্রজ্ঞাপনে।</p>', 'posts\\November2021\\r0fby3wFiNgwHtypXDWD.jpg', '৭-চিকিৎসককে-সিভিল-সার্জন-পদে-পদোন্নতি', NULL, NULL, 'PUBLISHED', 1, '2021-11-17 13:11:35', '2021-11-17 13:16:48', 2);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'admin', 'Administrator', '2021-10-05 21:09:00', '2021-10-05 21:09:00');
INSERT INTO `roles` VALUES (2, 'user', 'Normal User', '2021-10-05 21:09:00', '2021-10-05 21:09:00');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT 1,
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `settings_key_unique`(`key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site');
INSERT INTO `settings` VALUES (2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site');
INSERT INTO `settings` VALUES (3, 'site.logo', 'Site Logo', 'settings\\November2021\\Q7KeXHSttsHo6qdk6RjK.png', '', 'image', 3, 'Site');
INSERT INTO `settings` VALUES (4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site');
INSERT INTO `settings` VALUES (5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin');
INSERT INTO `settings` VALUES (6, 'admin.title', 'Admin Title', 'newspaper', '', 'text', 1, 'Admin');
INSERT INTO `settings` VALUES (7, 'admin.description', 'Admin Description', 'Newspaper admin panel', '', 'text', 2, 'Admin');
INSERT INTO `settings` VALUES (8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin');
INSERT INTO `settings` VALUES (9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin');
INSERT INTO `settings` VALUES (10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');
INSERT INTO `settings` VALUES (11, 'site.favicon', 'Favicon', 'settings\\November2021\\J6Ulu9CdzGToUeCQi1on.jpg', NULL, 'image', 6, 'Site');
INSERT INTO `settings` VALUES (12, 'site.copyright', 'Copyright', 'newspaper', NULL, 'text', 7, 'Site');
INSERT INTO `settings` VALUES (13, 'site.owner_name', 'Owner Name', 'newspaper', NULL, 'text', 8, 'Site');
INSERT INTO `settings` VALUES (14, 'site.facebook', 'Facebook Link', NULL, NULL, 'text', 9, 'Site');
INSERT INTO `settings` VALUES (15, 'site.youtube', 'Youtube Link', NULL, NULL, 'text', 10, 'Site');
INSERT INTO `settings` VALUES (16, 'site.twitter', 'Twitter Link', NULL, NULL, 'text', 11, 'Site');
INSERT INTO `settings` VALUES (17, 'site.instagram', 'Instagram Link', NULL, NULL, 'text', 12, 'Site');
INSERT INTO `settings` VALUES (18, 'site.linkedin', 'Linkedin Link', NULL, NULL, 'text', 13, 'Site');
INSERT INTO `settings` VALUES (19, 'site.podcast', 'Podcast Link', NULL, NULL, 'text', 14, 'Site');
INSERT INTO `settings` VALUES (21, 'site.address', 'Address', '<p>৯৫ সোহরাওয়ার্দী এভিনিউ</p>\r\n<p>বারিধারা ডিপ্লোমেটিক জোন, ঢাকা ১২১২</p>', NULL, 'rich_text_box', 15, 'Site');
INSERT INTO `settings` VALUES (22, 'site.phone', 'Phone Number', '+8801234567891', NULL, 'text', 16, 'Site');
INSERT INTO `settings` VALUES (23, 'site.email', 'Email Address', 'info@newspaper.com', NULL, 'text', 17, 'Site');
INSERT INTO `settings` VALUES (24, 'site.map', 'Address Map Link', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.281812560719!2d90.41897371543224!3d23.808575892467356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7063761ecad%3A0x361f5c981b5b2a7d!2sDhakapost.com!5e0!3m2!1sen!2sbd!4v1613301136100!5m2!1sen!2sbd', NULL, 'text', 18, 'Site');
INSERT INTO `settings` VALUES (25, 'site.terms', 'Terms of use', '<h2 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 2rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif;\">Terms of Use</h2>\r\n<p class=\"pt-5\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px; padding-top: 3rem !important;\">Dhaka Post welcomes readers and visitors to the terms and conditions for use of Dhaka Post and its associated contents, services and applications. One can access the content of Dhaka Post in several ways by using multiple channels including www (world wide web), digital and social platforms.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\">To use our content, services, pictures, videos, information or whatsoever, readers and visitors must have to accept the &lsquo;Terms and Conditions&rsquo; of use including Dhaka Post&rsquo;s Privacy Policy. However, if anyone has any objection or reservation to any clause in the &lsquo;Terms and Conditions&rsquo; of use or the Privacy Policy, one may raise the issue with Dhaka Post by sending an email at: [info@dhakapost.com]. But the authority of Dhaka Post reserves all right to reject or accept any such objection or reservation.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\">All the users of Dhaka Post are required to abide by this &lsquo;Terms and Conditions&rsquo; of use. Failure to comply with the terms may lead to suspension of the account or prohibition from access to the website.</p>\r\n<p><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /></p>\r\n<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 1.5rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif;\">Intellectual Property Rights</h4>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\">Dhaka Post&rsquo;s content, logos, copyright, trademarks, patents, images, text, graphics, domain names, audio, video and other related intellectual property rights or other features of Dhaka Post and name belong to Dhaka Post. Users cannot claim any rights in Dhaka Post&rsquo;s intellectual property whether for commercial or non-commercial use. In addition, users are prevented from making any derivative work from the content of Dhaka Post.</p>\r\n<p><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /></p>\r\n<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 1.5rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif;\">Your use of our services</h4>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\">Users are required to use Dhaka Post services only for lawful means and for read-only purpose. The audio and video elements of the website can only be listened and viewed and nothing beyond. However, Dhaka Post encourages its users to share its contents in their social media profile, groups and related communities. But the contents must not be shared with anyone or any digital platforms with any modification or alteration.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\">The users must use the services only for non-commercial purpose. Users may use available services for personal and private purposes only, the users must not exploit, sell or use any content appearing on our services for any kind of commercial purposes.</p>\r\n<p><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /></p>\r\n<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 1.5rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif;\">Taking down contents</h4>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\">Dhaka Post can take down any of its contents at any time from its website. The users cannot refuse to remove content from their respective devices if asked by Dhaka Post.</p>\r\n<p><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /></p>\r\n<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 1.5rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif;\">Unauthorized and prohibited activities</h4>\r\n<p>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\">The user is specifically required not to associate Dhaka Post with any political party, racism, sexism or otherwise damage its reputation. The user is also prohibited from defaming Dhaka Post. Harassing, bullying or upsetting the people or any other user is strongly prohibited. The user must not post or upload any image or comment which is offensive or obscure or immoral. Personal attack by way of comment or image is likewise prohibited.</p>\r\n<p><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\" /></p>\r\n<h4 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 1.5rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif;\">Prohibition on sharing mark, contents, images</h4>\r\n<p>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px;\">Dhaka Post prohibits the users from sharing marks, contents or images for whatever purpose, be it commercial or not. All users are prohibited from taking credit from the contents or images shared, published or generated by Dhaka Post.</p>', NULL, 'rich_text_box', 19, 'Site');

-- ----------------------------
-- Table structure for translations
-- ----------------------------
DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int UNSIGNED NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `translations_table_name_column_name_foreign_key_locale_unique`(`table_name`, `column_name`, `foreign_key`, `locale`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of translations
-- ----------------------------
INSERT INTO `translations` VALUES (1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (21, 'menu_items', 'title', 2, 'pt', 'Media', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (26, 'menu_items', 'title', 4, 'pt', 'Funções', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (28, 'menu_items', 'title', 6, 'pt', 'Menus', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2021-10-05 21:09:01', '2021-10-05 21:09:01');
INSERT INTO `translations` VALUES (30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2021-10-05 21:09:01', '2021-10-05 21:09:01');

-- ----------------------------
-- Table structure for user_roles
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles`  (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`, `role_id`) USING BTREE,
  INDEX `user_roles_user_id_index`(`user_id`) USING BTREE,
  INDEX `user_roles_role_id_index`(`role_id`) USING BTREE,
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_roles
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint UNSIGNED NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `users_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$vJQs7TZQvdg42Om353fRreqt9reTGdLGvj8JLokAoXmtTjdX3Pora', '8TZWMt5wOGq0lL5PNJ5JdJoI2ZL7D9K8qkrwpbxct1lTYvgAgwAV8aiV8FtX', '{\"locale\":\"en\"}', '2021-10-05 21:09:00', '2021-10-13 13:58:19');

SET FOREIGN_KEY_CHECKS = 1;
