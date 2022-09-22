using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Threshold_of_Islam
{
    public partial class HomePage : Form
    {
        public HomePage()
        {
            InitializeComponent();
        }

        private void guna2ImageButton1_Click(object sender, EventArgs e)
        {

        }

        private void PrayerTimes_Click(object sender, EventArgs e)
        {
            this.Hide();
            PrayerTime f4 = new PrayerTime();
            f4.Show();

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void HadithCollection_Click(object sender, EventArgs e)
        {
            this.Hide();
            Hadith_Collection f7 = new Hadith_Collection();
            f7.Show();
        }

        private void guna2GradientButton1_Click(object sender, EventArgs e)
        {
            this.Hide();
            DuaCollection f5 = new DuaCollection();
            f5.Show();
        }

        private void ToDoList_Click(object sender, EventArgs e)
        {
            this.Hide();
            To_Do_List f6 = new To_Do_List();
            f6.Show();
        }

        private void Conversations_Click(object sender, EventArgs e)
        {
            this.Hide();
            Conversations_of_scholarship f7 = new Conversations_of_scholarship();
            f7.Show();
        }
    }
}
