<?php // phpcs:ignore Squiz.Commenting.FileComment.Missing
/**
 *
 * Plugin Name:         Station PRO - Streaming Radio Player
 * Plugin URI:          http://wordpress.org/plugins/station-pro
 * Description:         Station Pro is an easy-to-use radio streaming plugin is software that connects your browser or media player to the station's server and plays the live broadcast.
 * Version:             2.3.4
 * Tested up to:        6.2
 * Stable tag:          2.3.4
 * Requires at least:   5.0
 * Requires PHP:        7.1
 * Author:              Team StationPro.co
 * Author URI:          https://stationpro.co
 * License:             GPLv3 or later
 * License URI:         http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:         station-pro
 * Provides:            Stationpro
 *
 * @package             Station Pro - Web
 * @author              Stationpro Team
 * @license             GNU General Public License, version 3
 * @copyright           2012-2023 StationPro.co
 */

 /*
  Copyright (c) 2012-2023 StationPro.co.
  All rights reserved.

  This software is distributed under the GNU General Public License, Version 2,
  June 1991. Copyright (C) 1989, 1991 Free Software Foundation, Inc., 51 Franklin
  St, Fifth Floor, Boston, MA 02110, USA

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA

  *******************************************************************************
  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
  ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
  WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
  DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
  ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
  (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
  LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
  ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
  SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
  *******************************************************************************
*/
// Exit if accessed directly.
defined('ABSPATH') || exit;

if (! defined('REDUX_PLUGIN_FILE')) {
    define('REDUX_PLUGIN_FILE', __FILE__);
}

// Require the main plugin class.
require_once plugin_dir_path(__FILE__) . 'main-plugin.php';


// Register hooks that are fired when the plugin is activated and deactivated, respectively.
register_activation_hook(__FILE__, array( 'Redux_Framework_Plugin', 'activate' ));
register_deactivation_hook(__FILE__, array( 'Redux_Framework_Plugin', 'deactivate' ));


// Get plugin instance.
Redux_Framework_Plugin::instance();
